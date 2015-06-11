<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends MX_Controller {

    public function __construct() {

        parent::__construct();
        $uristring = uri_string();
      
         if($this->session->all_userdata('language') != '')
        {
             if($this->session->userdata('language') != '')
             $this->language = $this->session->userdata('language');
             else
             $this->language = 'english';
                 
        }
        else
        {
            
            $this->language = 'english';
        }
        //$this->language = ($this->session->all_userdata('language')) ? $this->session->userdata('language') : $this->config->item('default_language'); 
         if (! $this->session->userdata('username') && $uristring != 'users/login')
        {
            redirect('site/home/login','refresh');; // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language,  $this->language);
        
        
        
        $this->load->model('users/user_model', 'user_model');

        $this->load->library('form_validation');
//        $this->lang->load('dashboard', 'english');
    }

    public function index() {
        $data['page'] = 'user';
        $data['language'] = $this->language;
        $this->load->model('groups/groups_model'); 
        $data['groups'] = $this->groups_model->get_all_groups();
        $data['users'] = $this->user_model->get_all_users();
        $this->load->view('users_view', $data);
    }

    public function add() {

        if ($this->input->post('submit', TRUE)) {
            $data = array(
                'username' => $this->input->post('username'),
               'password' => md5($this->input->post('password')),
               'email' => $this->input->post('email'),
               'group_id' => $this->input->post('group'),
               'cargo' => $this->input->post('cargo'),
                'language' => $this->input->post('language')
            );
            $this->user_model->add_user($data);
          
        } 
           redirect("users");
        
    }
    public function edit_user()
    {
        $data = array(
                'username' => $this->input->post('username'),
               'password' => md5($this->input->post('password')),
               'email' => $this->input->post('email'),
               'group_id' => $this->input->post('group'),
               'cargo' => $this->input->post('cargo'),
                'language' => $this->input->post('language')
            );
            $userid = $this->input->post('userid');
            $this->user_model->update_user($data,$userid);
           redirect("users");
    }
    
    	public function login(){
             if(isset($_POST))
            {
//                print_r($this->input->post());
//                exit;
                $data = array(
                 'username' => $this->input->post('username'),
               'password' => md5($this->input->post('password'))
                        );
                $user_details = $this->user_model->checkUser($data);
                $user_details = $user_details[0];
                if(!empty($user_details))
                {
                    //print_r($user_details);
                    $userarray = array(
                        'username' => $user_details['username'],
                        'language' => $user_details['language'],
                        'email' => $user_details['email'],
                        'group' => $user_details['group_id'],
                        'cargo' => $user_details['cargo']
                    );
                    $this->session->set_userdata($userarray);
//                    print_r($this->session->all_userdata());
//                    exit;
                    redirect('dashboard','refresh');
                }
            else {
                    redirect('site/home/login','refresh');
                }
                //$this->input->post('username');
                //$this->input->post('password');
                
            }
            else 
		{	
			redirect('site/home/login','refresh');
		}
		
	}
        public function logout()
        {
            
            $useritems = array(
                        'username' => '',
                        'language' => '',
                        'email' => '',
                        'group' => '',
                        'cargo' => ''
                    );
            $this->session->unset_userdata($useritems);
            redirect('site/home/login','refresh');
        }
        public function get_user_info()
        {
            $user_id = $this->input->post('user_id');
           $data['user'] = $this->user_model->get_user_info($user_id);
           $data['user'] = $data['user'][0];
           $this->load->model('groups/groups_model'); 
           $data['groups'] = $this->groups_model->get_all_groups();
           $this->load->view('users/user_edit', $data);
        }
        public function delete_user()
        {
            $user_id = $this->input->post('user_id');
            $this->user_model->delete_user($user_id);
        }

}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */