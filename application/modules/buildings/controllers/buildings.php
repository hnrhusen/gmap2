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
        $this->load->model('layers/layer_model');
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
            //'./././uploads/buildings/casa.jpg'
            //'./././uploads/buildings/casa2.jpeg'
            if ($this->csvimport->get_array($file_path)) {
                //$csv_array['csv'] = $this->csvimport->get_array($file_path);                
                $headers = ['longitud','latitud','tipo_contribuyente','rif_ci','razon_social','direccion','tipo_inmueble','tipo_propiedad','nivel','npiso','unidad','foto_local','id_punto'];
                $csv_array['csv'] = $arreglo = $this->csvimport->get_array($file_path, $headers);
                unlink($file_path);
                if (isset($csv_array)){
                    //print_r(array_values($csv));
                    //echo count($csv);
                    for ($i=0; $i < count($arreglo); $i++) { 
                        $vector = array(); $j=0;
                        $vector = $arreglo[$i] ;
                        $data = array(
                                'langitude' =>floatval(str_replace(",",".",$vector['longitud'])),
                                'latitude' => floatval(str_replace(",",".",$vector['latitud'])),
                                'tipo_contribuyente' =>$vector['tipo_contribuyente'],
                                'rif_ci' =>$vector['rif_ci'],
                                'name' =>$vector['razon_social'],
                                'address' =>$vector['direccion'],
                                'tipo_inmueble' =>$vector['tipo_inmueble'],
                                'tipo_propiedad' =>$vector['tipo_propiedad'],
                                'nivel' =>$vector['nivel'],
                                'npiso' =>$vector['npiso'],
                                'unidad' =>$vector['unidad'],
                                'building_img' =>$vector['foto_local'],
                                'debt' =>$vector['id_punto']
                            );
                        /*foreach ($csv_array[$i] as $value) {
                             $vector[$j]=$value;
                            echo $vector[$j];
                            $j++;*/
                            //echo $key." => ".$value."<br>";
                            /*$data = array(
                                'langitude' =>$value,
                                'latitude' => $value,
                                'tipo_contribuyente' =>$value,
                                'rif_ci' =>$value,
                                'name' =>$value,
                                'address' =>$value,
                                'tipo_inmueble' =>$value,
                                'tipo_propiedad' =>$value,
                                'nivel' =>$value,
                                'npiso' =>$value,
                                'unidad' =>$value,
                                'building_img' =>$value,
                                'debt' =>$value
                            );*/
                            
                       // }
                        
                        $this->layer_model->add_layer_item_building($data);

                        //echo "<br><br>";
                    }                 
                }       
                redirect("buildings");        
                //$this->load->view('buildings_view', $csv_array);
            }else{
                $data['error'] = "Error occured";
                $this->load->view('buildings_view', $data);
            }
        }            
   } 

}
/*END OF FILE*/
