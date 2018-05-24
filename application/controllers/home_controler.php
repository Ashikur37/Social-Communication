<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controler extends CI_Controller {
		function __construct()
		{
			
			parent::__construct();
			$this->load->library('session');
			$this->load->model('signup_model');
			 $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
			$this->load->helper('url');
			
			
		}
	public function signup()
	{ 
	if ( $this->input->get_post('buttonSave'))
	{

		$this->insertuser();

	}
	else
	{
		$this->load->view('signup_view');
		return;
	}
	}
	public function profile_view()
	{		$id=$this->input->get('id'); 
			$profile['prf']=$this->signup_model->getProfile($id);
		
		$this->load->view('profile_view',$profile);
		return;

	}
	public function update_profile()
	{		 
			if ( $this->input->get_post('update'))
	{

		$this->profileupdated();
		return;

	}      else


{
$profile['prf']=$this->signup_model->updateProfile($_SESSION["id"]);
			
		$this->load->view('updateProfileview',$profile);
		return;


}
			

	}
	public function friend_list()
	{		 
			$profile['prf']=$this->signup_model->getProfile($_SESSION["id"]);
			$profile['list']=$this->signup_model->getFriendlist($_SESSION["id"]);
			$profile['posts']=$this->signup_model->getMyPosts($_SESSION["id"]);
		$this->load->view('friend_list_view',$profile);
		return;

	}
	public function addfriend()
	{		$id=$this->input->get('id'); 
			$this->signup_model->addfriend($id);
			$profile['prf']=$this->signup_model->getProfile($id);
		
		$this->load->view('profile_view',$profile);
					
		return;

	}
		public function accept_request()
	{		$id=$this->input->get('id'); 
			$this->signup_model->accept_request($id);
			redirect('http://localhost:8082/friends2/', 'refresh');
					
		return;

	}
	public function cancel_request()
	{		$id=$this->input->get('id'); 
			$this->signup_model->cancel_request($id);
			redirect('http://localhost:8082/friends2/', 'refresh');
					
		return;

	}



	public function signin()
	{ 
	
		$this->load->view('signin_view');
		return;
	
	}
	public function friends()
	{ 
	$name = $this->input->get('nm');
	if(strlen($name)<1)
	{
		return;
	}
		else
		$friend['frnd']=$this->signup_model->getfriends($name);
		
		$this->load->view('friends_view',$friend);
		return;
	
	}
	public function friendrequests()
	{ 
	
	
		$friend['frnd']=$this->signup_model->friendrequests();
		
		$this->load->view('requests_view',$friend);
		return;
	
	}
	public function logout()
	{ 		
			$this->session->unset_userdata('variable');
			$this->session->sess_destroy();
		redirect('http://localhost:8082/friends2/', 'refresh');
		return;
	
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function profileupdated()
	{
		$user['uname'] = $this->input->get_post('un');
		
		$user['email'] = $this->input->get_post('email');
	
		$user['mob'] = $this->input->get_post('mb');
		$this->form_validation->set_rules('email', 'Email ', 'trim|required|valid_email');
		$this->form_validation->set_rules('pass', 'password', 'required|min_length[6]');
		$this->form_validation->set_rules('fn', 'firstname', 'required');
		$this->form_validation->set_rules('ln', 'lastname', 'required');
		$this->form_validation->set_rules('un', 'username', 'required');
		$this->form_validation->set_rules('gnd', 'gender', 'required');
		$this->form_validation->set_rules('dob', 'date of birth', 'required');
		$this->form_validation->set_rules('mob', 'Mobile number', 'required');


		
		
		$this->signup_model->updated($user);
				$_SESSION["user"]=$user['uname'];
		$this->load->helper('url');
		redirect('http://localhost:8082/friends2', 'refresh');
	}
	public function insertuser()
	{$user['fname'] = $this->input->get_post('fn');
		$user['lname'] = $this->input->get_post('ln');
		$user['uname'] = $this->input->get_post('un');
		
		$user['email'] = $this->input->get_post('email');
		$user['pass'] = $this->input->get_post('pass');
		$user['gender'] = $this->input->get_post('gnd');
		$user['dob'] = $this->input->get_post('dob');
		$user['mob'] = $this->input->get_post('mb');
		$this->form_validation->set_rules('email', 'Email ', 'trim|required|valid_email');
		$this->form_validation->set_rules('pass', 'password', 'required|min_length[6]');
		$this->form_validation->set_rules('fn', 'firstname', 'required');
		$this->form_validation->set_rules('ln', 'lastname', 'required');
		$this->form_validation->set_rules('un', 'username', 'required');
		$this->form_validation->set_rules('gnd', 'gender', 'required');
		$this->form_validation->set_rules('dob', 'date of birth', 'required');
		$this->form_validation->set_rules('mob', 'Mobile number', 'required');


			if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('signup_view',$user);
			return ;
		}
		
		$this->signup_model->insert($user);

		$this->load->helper('url');
		redirect('http://localhost:8082/friends2', 'refresh');
	}

	public function index()
	{
		if ( $this->input->get_post('buttonSave'))
		{
			$this->load->view('signin_view');
			return;

		}

		
		

		if(! $this->input->get_post('buttonSave')&&! $this->input->get_post('buttonlogin')&&! $this->input->get_post('share'))
		{
				if(isset($_SESSION['user']))
				{   $profile['posts']=$this->signup_model->getFriendsPosts($_SESSION["id"]);
					$this->load->view('timeline_view.php',$profile);
			return ;

				}
			$this->load->view('signin_view.php');
			return ;
		}
		else if ( $this->input->get_post('buttonSave'))
		
		{
			$this->insertuser();
		//redirect('http://localhost:8082/friends2', 'refresh');
		}
		else if( $this->input->get_post('buttonlogin'))
		{	$user['email'] = $this->input->get_post('email');
			$user['pass'] = $this->input->get_post('pass');
			$this->form_validation->set_rules('email', 'Email ', 'trim|required|valid_email');
				$this->form_validation->set_rules('pass', 'password', 'required');


			if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('signin_view',$user);
			return ;
		}
			
				$x=$this->signup_model->check($user);
				if($x==0)
				{
					$this->load->helper('url');
		redirect(base_url(), 'refresh');
					
				}
				else
				{
					
					$_SESSION['email']=$user['email'];

					$un=$this->signup_model->getuser($user['email']);

					$_SESSION['user']=$un['user_name'];
					$_SESSION['id']=40;
					$this->load->helper('url');
				$profile['posts']=$this->signup_model->getFriendsPosts($_SESSION['id']);
		$this->load->view('timeline_view',$profile);
				}
					
		}
		else if ( $this->input->get_post('share'))
		{

			$user['post'] = $this->input->get_post('post');
			$this->signup_model->insertPost($user['post']);
			redirect(base_url(), 'refresh');

		}

		
	}
	
}
