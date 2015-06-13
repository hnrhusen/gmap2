<?php

class Buildings extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('csv_model');  
        $this->load->library('csvimport');
        if ($this->session->all_userdata('language') != '') {
            $this->language = $this->session->userdata('language');
        } else {
            $this->language = $this->config->item('default_language');
        }

        if (!$this->session->userdata('username')) {
            redirect('site/home/login', 'refresh');            
        }
        $this->lang->load($this->language,$this->language);
    }

    function index() {
        //$data['addressbook'] = $this->csv_model->get_addressbook();
        $data['page'] = 'buildings';
        $this->load->view('buildings_view', $data);
    }

    function importcsv() {
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] = './././uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '3000';

        $this->load->library('upload', $config);
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
            $this->load->view('buildings_view', $data);
        }else {
            $file_data = $this->upload->data();
            $file_path =  './././uploads/'.$file_data['file_name'];
            
            if ($this->csvimport->get_array($file_path)) {
                //$csv_array['csv'] = $this->csvimport->get_array($file_path);                
                $headers = ['longitud','latitud','tipo_contribuyente','rif_ci','razon_social','direccion','tipo_inmueble','tipo_propiedad','nivel','npiso','unidad','foto_local','id_punto'];
                $csv_array['csv'] = $this->csvimport->get_array($file_path, $headers);
                unlink($file_path);
                $this->load->view('buildings_view', $csv_array);
            }else{
                $data['error'] = "Error occured";
                $this->load->view('buildings_view', $data);
            }
        }            
   } 

}
/*END OF FILE*/
