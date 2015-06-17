<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Layer_model extends CI_Model {



	public function ___construct()

	{

	parent::___construct();

		//$this->load->database();

	}


    function get_map_layers(){
//         $query="SELECT * FROM `tbl_label`";
//	$result= mysql_query($query);
//	if($result){
//		while ($row = mysql_fetch_array($result)) {
//			$rows[] = $row;
//		}
//		$j = 0;
//		for ($i=0;$i<count($rows);$i++)
//		{
//			$result_array[$rows[$i]['label']]['label'] = $rows[$i]['label'];
//			$result_array[$rows[$i]['label']]['icon'] = base_url().'assets/img/map_icons/'.$rows[$i]['icon'];
//			$query1 = "select address,lat,lng from markers where label_id = ".$rows[$i]['label_id'];
//			$result1=mysql_query($query1);
//			while ($row1 = mysql_fetch_assoc($result1)) {
//				$item_array[0] = $row1['address'];
//								$item_array[1] = $row1['lat'];
//
//				$item_array[2] = $row1['lng'];
//
//				$result_array[$rows[$i]['label']]['items'][]= $item_array;
//			}
//		$j++;
//		}
//		header('Content-Type: application/json');
//		$encoded_array = json_encode($result_array);
//		return $encoded_array;   
//        }
            
            //lates query
        if ($this->session->all_userdata('language') != '') {
            $this->language = $this->session->userdata('language');
        } else {
            $this->language = $this->config->item('default_language');
        }
        $this->lang->load($this->language,$this->language);
        
    	$query1="SELECT DISTINCT `layer_id` FROM `layers_items` WHERE 1";
		$sql1=mysql_query($query1);
		while($row=mysql_fetch_assoc($sql1)){
			$layer_id[]=$row['layer_id'];
		}
        
		for ($i=0;$i<count($layer_id);$i++){
			//echo $layer_id[$i]; 
            $query="SELECT * FROM `layers` WHERE `id`=".$layer_id[$i];
			$result=mysql_query($query);
			while ($row1 = mysql_fetch_assoc($result)) {
				$rows[] = $row1;
			}
		}
               
		$j = 0;
		for ($i=0;$i<count($rows);$i++)
		{
			$result_array[$rows[$i]['layer_name']]['label'] = $rows[$i]['layer_name'];
			$result_array[$rows[$i]['layer_name']]['icon'] = base_url().'assets/img/map_icons/'.$rows[$i]['layer_icon'];
			$query1 = "SELECT * FROM `layers_items` WHERE `layer_id`=".$rows[$i]['id'];
			$result1=mysql_query($query1);
			while ($row1 = mysql_fetch_assoc($result1)) {
                                $item_array[0] = $row1['item_name'].'/'.$row1['item_address'];
				$item_array[1] = $row1['item_latitude'];
				$item_array[2] = $row1['item_longitude'];
				$result_array[$rows[$i]['layer_name']]['items'][]= $item_array;
				
			}
			
		$j++;
		}
		
		$query = "SELECT * FROM `buildings` WHERE `debt` <= 0 AND (`latitude` <> 0 OR `langitude`<> 0)";
		unset($result);
		$result = mysql_query($query);
		$building_array['buildings']['label'] = $this->lang->line("taxpayer_without_deb");
		$building_array['buildings']['icon'] = base_url().'assets/img/map_icons/home_blue.png';
		unset($row);
		while ($row = mysql_fetch_assoc($result)) {
			$building_array['buildings']['items'][]= array(
				$row['name'].'/'.$row['address'],
				$row['latitude'],
				$row['langitude'],
				$row['debt'],
				$row['building_img'],
				$row['tipo_inmueble'],
				$row['tipo_contribuyente'],
				$row['rif_ci']
			);
		}

		$query = "SELECT * FROM `buildings` WHERE `debt` > 0 AND (`latitude` <> 0 OR `langitude`<> 0)";
		unset($result);
		$result = mysql_query($query);
		$building_array2['buildings_debts']['label'] = $this->lang->line("taxpayer_with_deb");
		$building_array2['buildings_debts']['icon'] = base_url().'assets/img/map_icons/red-house.png';
		unset($row);
		while ($row = mysql_fetch_assoc($result)) {
			$building_array2['buildings_debts']['items'][]= array(
				$row['name'].'/'.$row['address'],
				$row['latitude'],
				$row['langitude'],
				$row['debt'],
				$row['building_img'],
				$row['tipo_inmueble'],
				$row['tipo_contribuyente'],
				$row['rif_ci']
			);
		}
		$final_array = $building_array + $building_array2; //+ $result_array;		

		header('Content-Type: application/json');
		$encoded_array = json_encode($final_array);
		print_r($encoded_array);
    }

	function get_all_layers() {
		$this->db->select('*');
        //$this->db->where('layer_name !=', 'building');
		$query = $this->db->get('layers');
        return $query->result_array();
	}
   
    function get_all_other_layers() {
		$this->db->select('*');
        $this->db->where('layer_name !=', 'building');
		$query = $this->db->get('layers');
        return $query->result_array();
	}
        
        
        function get_layers_items($layer_name) {
            
//		$this->db->select('*');
//
//		$query = $this->db->get('layers_items');
            
		 $query  = $this->db->query('SELECT layers_items.*,layers.layer_name FROM layers_items left join layers on layers_items.layer_id = layers.id where layers.layer_name ="'.$layer_name.'"');
         return $query->result_array();

        }
        function get_first_sub_layers()
        {
            
        $f = mysql_query("SELECT id FROM layers ORDER BY id ASC LIMIT 1");
        while ($gf = mysql_fetch_array($f)) {
            $firstid = $gf['id'];
        }
            $this->db->select('*');
            $this->db->where('layer_id', $firstid);
            $this->db->get('layers_items');
        }
        
        function get_all_floors() {
            
		$this->db->select('*');

		$query = $this->db->get('floors');

         return $query->result_array();
        }
         function get_floors_buildings() {
            
		 $query  = $this->db->query('SELECT buildings.name as building, buildings.address, floors.name as floor FROM floors left join buildings on floors.building_id = buildings.id');
         return $query->result_array();
        }
          function get_office_floors_buildings() {
        $query  = $this->db->query("SELECT office.name as office, buildings.name as building, buildings.address, floors.name as floor  FROM office left join floors on floors.id = office.floor_id left join buildings on office.building_id  = buildings.id");
        return $query->result_array();  
          }
        
	function getUser($id) {

		$this->db->select('user_id,user_fname,user_lname,user_email,user_joindate,user_status');

		$query = $this->db->get('procure_comp_user');

         return $query->result_array();

	

	}
        function get_layer_id($layer_name)
        {
            $query = $this->db->get_where('layers', array('layer_name'=>$layer_name));
            return $query->result_array();
        }
        function checkUser($data) {
                //print_r($data);
                $query = $this->db->get_where('users', array('username'=>$data['username'],'password'=>$data['password']));
         return $query->result_array();
	}



	public function add_layer($data)

	{
		$this->db->insert('layers', $data);

	}
        
        
        function update_layer($data,$id)

	{
            $this->db->update('layers',$data, array('id'=>$id));

//	 $this->db->query("UPDATE layers set
//
//						 layer_name			= '".$data['layer_name']."',
//
//						 layer_description			= '".$data['layer_description']."'
//
//						 where id=".$id."");
//
//	

	}
        
        function update_item($data,$id)
        {
             $this->db->query("UPDATE layers_items set

						 item_name			= '".$data['item_name']."',

						 item_address			= '".$data['item_address']."',
                                                     
                                                 item_latitude			= '".$data['item_latitude']."',
						 item_longitude                 = '".$data['item_longitude']."'
                                                where id=".$id."");

        }
        
        
    public function add_layer_item($data)
	{
		$this->db->insert('layers_items', $data);
	}
	public function add_layer_item_building($data){
		
		$this->db->insert('buildings', $data);	

	}
    public function add_floor($data){
		$this->db->insert('floors', $data);

	}
        
    public function add_office($data){
		$this->db->insert('office', $data);

	}
        
	public function delete_layer($layer_id)
	{

		$this->db->where('id', $layer_id);

		$this->db->delete('layers');

	}
        public function delete_layer_item($layer_item_id)

	{

		$this->db->where('id', $layer_item_id);

		$this->db->delete('layers_items');

	}
        
        function get_building_floors($building_id)
        {
             $query = $this->db->get_where('floors', array('building_id'=>$building_id));
         return $query->result_array();
        }
        function get_floor_office($floor_id)
        {
             $query = $this->db->get_where('office', array('floor_id'=>$floor_id));
         return $query->result_array();
        }

	

	

	//Function to update the user info


}