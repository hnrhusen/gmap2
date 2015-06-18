<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct() {

        parent::__construct();
        if ($this->session->all_userdata('language') != '') {
            $this->language = $this->session->userdata('language');
        } else {
            $this->language = $this->config->item('default_language');
        }
        //$this->language = ($this->session->all_userdata('language')) ? $this->session->userdata('language') : $this->config->item('default_language'); 
        if (!$this->session->userdata('username')) {
            redirect('site/home/login', 'refresh');
            ; // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language,$this->language);
//        $this->lang->load('dashboard',  $this->language);
    }

    public function index() {
        $data['page'] = 'dashboard';
        $this->load->view('dashboard_view', $data);
    }

    public function get_layers() {
        $this->load->model('layers/layer_model');
        $map_layers_datas = $this->layer_model->get_map_layers();
        print_r($map_layers_datas);
    }

    public function get_all_layers() {
        $this->load->model('layers/layer_model');
        $all_layers_datas = $this->layer_model->get_all_layers();
        $layer_select = '';
        foreach ($all_layers_datas as $layers) {
            $layer_id = $layers['id'];
            $layer_name = $layers['layer_name'];
            $layer_select .= '<option value="' . $layer_id . '">' . $layer_name . '</option>';
        }
        $layer_select .= '<option value="0">Buildings | Debts</option>';
        print_r($layer_select);
    }

    public function add_marker_location() {
//        print_r($this->input->post());
//        exit;         
        if (isset($_POST)) { //run only if there's a post data
            //make sure request is comming from Ajax
            $xhr = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
            if (!$xhr) {
                header('HTTP/1.1 500 Error: Request must come from Ajax!');
                exit();
            }
            // get marker position and split it for database
            $mLatLang = explode(',', $_POST["latlang"]);
            $mLat = filter_var($mLatLang[0], FILTER_VALIDATE_FLOAT);
            $mLng = filter_var($mLatLang[1], FILTER_VALIDATE_FLOAT);
            $mName = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
            $mAddress = filter_var($_POST["address"], FILTER_SANITIZE_STRING);
            $mLayer = filter_var($_POST["layer"], FILTER_SANITIZE_STRING);
            $this->load->model('layers/layer_model');
            //redirect(strcmp($data['layer_id'], "0"));
            //if(strcmp($data['layer_id'], "0") == 0){
            //if(isset($_POST["debt"])){
            //f(isset($_POST["debt"]) && $data['layer_id'] == "0"){
            $layer = $this->input->post('layer');
            if(strcmp($layer, "0") == 0){
                //redirect("pepe");
                $mDebt = filter_var($_POST["debt"], FILTER_SANITIZE_STRING); 
                $data['name'] = $this->input->post('name');                               
                $data['address'] = $this->input->post('address');
                $data['latitude'] = $mLat;
                $data['langitude'] = $mLng;
                $data['debt'] = $this->input->post("debt");//$mDebt;                
                //print_r($data);
                $this->layer_model->add_layer_item_building($data);
            }else{
                //redirect("xxx");
                $data['layer_id'] = $this->input->post('layer');
                $data['item_name'] = $this->input->post('name');
                $data['item_address'] = $this->input->post('address');
                $data['item_latitude'] = $mLat;
                $data['item_longitude'] = $mLng;
                $this->layer_model->add_layer_item($data);
            }
        }
    }

    function getaddress($lat, $lng) {
        $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($lat) . ',' . trim($lng) . '&sensor=false';
        $json = @file_get_contents($url);
        $data = json_decode($json);
        $status = $data->status;
        if ($status == "OK")
            return $data->results[0]->formatted_address;
        else
            return false;
    }

}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */