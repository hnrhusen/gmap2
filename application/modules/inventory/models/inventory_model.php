<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inventory_model extends CI_Model {

    public function ___construct() {

        parent::___construct();

        //$this->load->database();
    }

    function add_inventory($data) {
        $this->db->insert('inventory', $data);
    }

    function add_log($data) {
        $this->db->insert('inventory_logs', $data);
    }

    function get_all_inventory() {

        $this->db->select('*');

        $query = $this->db->get('inventory');

        return $query->result_array();
    }

    //nelson
    function get_all_inventory_location() {

        $location = 'location';
        $this->db->select('*');
        $this->db->where('sub_type', $location);

        $query = $this->db->get('inventory');
        $str = $this->db->last_query();



        return $query->result_array();
    }

    function get_all_inventory_article() {
        $article = 'article';
        //$this->db->select('*');
        //$this->db->where('sub_type', $article);
      $query  = $this->db->query('SELECT inventory.*, buildings.name as building, floors.name as floor, office.name as office FROM inventory left join buildings on inventory.building_id = buildings.id left join floors on inventory.floor_id = floors.id left join office on inventory.office_id = office.id where inventory.sub_type = "'.$article.'"');
        //$query = $this->db->get('inventory');

        return $query->result_array();
    }

    function get_all_inventory_work() {

        $work = 'works';
//        $this->db->select('*');
//        $this->db->where('type', $work);

//        $query = $this->db->get('inventory');
              $query  = $this->db->query('SELECT inventory.*, buildings.name as building, floors.name as floor, office.name as office FROM inventory left join buildings on inventory.building_id = buildings.id left join floors on inventory.floor_id = floors.id left join office on inventory.office_id = office.id where inventory.type = "'.$work.'"');


        return $query->result_array();
    }

    function get_all_inventory_location_edit($id) {


        $this->db->select('*');
        $this->db->where('id', $id);

        $query = $this->db->get('inventory');
        $str = $this->db->last_query();



        return $query->result_array();
    }

    function get_all_inventory_articles_edit($id) {


        $this->db->select('*');
        $this->db->where('id', $id);

        $query = $this->db->get('inventory');
        $str = $this->db->last_query();



        return $query->result_array();
    }

    function get_all_inventory_work_edit($id) {


        $this->db->select('*');
        $this->db->where('id', $id);

        $query = $this->db->get('inventory');
        $str = $this->db->last_query();



        return $query->result_array();
    }

    function getUser($id) {

        $this->db->select('user_id,user_fname,user_lname,user_email,user_joindate,user_status');

        $query = $this->db->get('procure_comp_user');

        return $query->result_array();
    }

    function checkUser($data) {
        //print_r($data);
        $query = $this->db->get_where('users', array('username' => $data['username'], 'password' => $data['password']));
        return $query->result_array();
    }

    //Get company list

    public function add_building($data) {
        $this->db->insert('buildings', $data);
    }

    public function delete_inventory($inventory_id) {
        $this->db->where('id', $inventory_id);
        if ($this->db->delete('inventory')) {
            $query = $this->db->get_where('inventory_logs', array('inventory_id' => $inventory_id));
            $inventory_logs = $query->result_array();
            foreach ($inventory_logs as $log) {
                $image_path = FCPATH . 'assets/img/inventory_uploads/' . $log['image'];
                unlink($image_path);
            }
            $this->db->where('inventory_id', $inventory_id);
            $this->db->delete('inventory_logs');
            //print_r($inventory_logs);
            //exit;
//                }    
        }
    }

    public function delete_work($work_id) {
        $this->db->where('id', $work_id);
        $this->db->delete('inventory');
    }
    public function delete_log($log_id) {
        
        $query = $this->db->get_where('inventory_logs', array('id' => $log_id));
            $logs = $query->result_array();
            
            foreach ($logs as $log) {
                $image_path = FCPATH . 'assets/img/inventory_uploads/' . $log['image'];
                unlink($image_path);
            }
        $this->db->where('id', $log_id);
        $this->db->delete('inventory_logs');
    }

    //get layer item
    function get_layer_items($layer_id) {
        $query = $this->db->get_where('layers_items', array('layer_id' => $layer_id));
        return $query->result_array();
    }

    function get_initial_sublayer() {
         $f = mysql_query("SELECT id FROM layers ORDER BY id ASC LIMIT 2");
        while ($gf = mysql_fetch_array($f)) {
            $secondid = $gf['id'];
        }
        $query = $this->db->get_where('layers_items', array('layer_id' => $secondid));
        return $query->result_array();
    }

    function get_initial_office() {
        $fb = mysql_query("SELECT id FROM buildings ORDER BY id ASC LIMIT 1");
        while ($gf = mysql_fetch_array($fb)) {
            $firstbuildingid = $gf['id'];
        }
         $fo = mysql_query("SELECT id FROM floors ORDER BY id ASC LIMIT 1");
        while ($gf = mysql_fetch_array($fo)) {
            $firstfloorid = $gf['id'];
        }
        $query = $this->db->get_where('office', array('building_id' => $firstbuildingid, 'floor_id' => $firstfloorid));
        return $query->result_array();
    }

    function get_initial_floor() {
        $fb = mysql_query("SELECT id FROM buildings ORDER BY id ASC LIMIT 1");
        while ($gf = mysql_fetch_array($fb)) {
            $firstbuildingid = $gf['id'];
        }
        $query = $this->db->get_where('floors', array('building_id' => $firstbuildingid));
        return $query->result_array();
    }

    function get_inventory_logs($inventory_id) {
        $query = $this->db->get_where('inventory_logs', array('inventory_id' => $inventory_id));
        return $query->result_array();
    }

    //Function to update the user info
    function location_edit($good_location_id, $data) {
        $this->db->query("UPDATE inventory set
              

						 type= '" . $data['type'] . "',

						 sub_type= '" . $data['sub_type'] . "',

					         layer_id= '" . $data['layer_id'] . "',

					         sub_layer_id= '" . $data['sub_layer_id'] . "',	 

					         brand= '" . $data['brand'] . "',

					          model= '" . $data['model'] . "',
					          serial= '" . $data['serial'] . "',
					           description= '" . $data['description'] . "'

						 where id=" . $good_location_id . "");
    }

    function article_edit($good_article_id, $data) {
        $this->db->where('id', $good_article_id);
        $this->db->update('inventory', $data);
    }

    function edit_work($work_id, $data) {
        $this->db->where('id', $work_id);
        $this->db->update('inventory', $data);
    }

}
