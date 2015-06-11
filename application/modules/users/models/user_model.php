<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class User_model extends CI_Model {



	public function ___construct()

	{

	parent::___construct();

		//$this->load->database();

	}



	function get_all_users() {

		$query = $this->db->query('select users.*, groups.name as group_name from users left join groups on users.group_id = groups.id');

         return $query->result_array();

	}
	
	function get_user_info($id) {

		$this->db->select('*');
                $this->db->where('id', $id);
		$query = $this->db->get('users');

         return $query->result_array();

	

	}
        function checkUser($data) {
                //print_r($data);
                $query = $this->db->get_where('users', array('username'=>$data['username'],'password'=>$data['password']));
         return $query->result_array();
	}


	

	//Get company list

	public function add_user($data)

	{
		$this->db->insert('users', $data);

	}

	
	public function delete_user($user_id)

	{

		$this->db->where('id', $user_id);
		$this->db->delete('users');

	}

	

	

	//Function to update the user info

	

	function update_user($data,$id)

	{

	 $this->db->query("UPDATE users set

						 username			= '".$data['username']."',

						 password			= '".$data['password']."',

					     language			= '".$data['language']."',

					     email		= '".$data['email']."',	 

					     group_id			= '".$data['group_id']."',

					     cargo			= '".$data['cargo']."'

						 where id=".$id."");

	

	}


}