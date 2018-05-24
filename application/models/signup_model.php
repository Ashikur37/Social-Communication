<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup_model extends CI_Model {

	public function getAll()
	{
		/*$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('bankdb', $con);*/
		$this->load->database();

		$sql = "SELECT * FROM users";
		

		//$result = mysql_query($sql);
		$result = $this->db->query($sql);
		
		/*foreach($row = mysql_fetch_array($result))
		{
			
		}*/
		//$result->row_array();
		return $result->result_array();


	}
	public function getProfile($id)
	{
		/*$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('bankdb', $con);*/
		$this->load->database();

		$sql = "SELECT * FROM users where id=$id";
		

		//$result = mysql_query($sql);
		$result = $this->db->query($sql);
		
		/*foreach($row = mysql_fetch_array($result))
		{
			
		}*/
		//$result->row_array();
		return $result->result_array();


	}
	public function updateProfile($id)
	{
		/*$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('bankdb', $con);*/
		$this->load->database();

		$sql = "SELECT * FROM users where id=$id";
		

		//$result = mysql_query($sql);
		$result = $this->db->query($sql);
		
		/*foreach($row = mysql_fetch_array($result))
		{
			
		}*/
		//$result->row_array();
		return $result->result_array();


	}

	public function getfriends($name)
	{
		/*$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('bankdb', $con);*/
		$this->load->database();

		$sql = "SELECT * FROM users where user_name like '$name%'";
		

		//$result = mysql_query($sql);
		$result = $this->db->query($sql);
		
		/*foreach($row = mysql_fetch_array($result))
		{
			
		}*/
		//$result->row_array();
		return $result->result_array();


	}
	public function friendrequests()
	{
		/*$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('bankdb', $con);*/
		$this->load->database();
		$id=$_SESSION['id'];
		$sql = "SELECT * FROM users where id in( SELECT friend1 FROM friends where friend2=$id and status=0)";
		

		//$result = mysql_query($sql);
		$result = $this->db->query($sql);
		
		/*foreach($row = mysql_fetch_array($result))
		{
			
		}*/
		//$result->row_array();
		return $result->result_array();


	}
	public function getFriendlist()
	{
		/*$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('bankdb', $con);*/
		$this->load->database();
		$id=$_SESSION['id'];
		$sql = "SELECT * FROM users where id in(select friend2 from friends where friend1=$id and status=1)";
		

		//$result = mysql_query($sql);
		$result = $this->db->query($sql);
		
		/*foreach($row = mysql_fetch_array($result))
		{
			
		}*/
		//$result->row_array();
		return $result->result_array();


	}
	public function accept_request($fid)
	{
		/*$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('bankdb', $con);*/
		$this->load->database();
		$id=$_SESSION['id'];
		$dt=date("Y/m/d");
		$sql = "update friends set status=1 where friend1=$fid and friend2=$id";
		$sql1 = "insert into friends values($id,$fid,1,'$dt')";

		//$result = mysql_query($sql);
		$result = $this->db->query($sql);
		$results = $this->db->query($sql1);
		/*foreach($row = mysql_fetch_array($result))
		{
			
		}*/
		//$result->row_array();
		


	}
	public function cancel_request($fid)
	{
		/*$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('bankdb', $con);*/
		$this->load->database();
		$id=$_SESSION['id'];
		$sql = "delete from friends   where friend1=$fid and friend2=$id";
		

		//$result = mysql_query($sql);
		$result = $this->db->query($sql);
		
		/*foreach($row = mysql_fetch_array($result))
		{
			
		}*/
		//$result->row_array();
		


	}

	public function getById($id)
	{
		$this->load->database();
		$sql = "SELECT * FROM users WHERE id=$id";
		$result = $this->db->query($sql);
		return $result->row_array();

	}
	public function getuser($email)
	{
		$this->load->database();
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = $this->db->query($sql);
		return $result->result_array();

	}
	public function getMyPosts($id)
	{
		$this->load->database();
		$sql = "SELECT * FROM posts WHERE poster_id='$id'";
		$result = $this->db->query($sql);
		return $result->result_array();

	}
	public function getFriendsPosts($id)
	{
		$this->load->database();
	
		$sql = "SELECT posts.post,posts.post_date,users.user_name from posts RIGHT JOIN users ON users.id = posts.poster_id WHERE posts.poster_id in(select friend1 from friends where friend2=$id) ";
		$result = $this->db->query($sql);
		return $result->result_array();

	}
	public function check($user)
	{
		$this->load->database();
		$sql = "SELECT * FROM logins WHERE email='$user[email]' and password='$user[pass]'";
		$result = $this->db->query($sql);
		$rowcount = $result->num_rows();
		return $rowcount;

	}
	
	public function addfriend($id)
	{
		$this->load->database();
		
		$dt=date("Y/m/d");
		$sql2 = "INSERT INTO friends VALUES ($_SESSION[id],$id,0,'$dt')";	
		$this->db->query($sql2);
		
	}
	public function insertPost($post)
	{
		$this->load->database();
		//INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `email`, `mobile`, `gender`, `dob`) VALUES (NULL, 'a', 'b', 'c', 'd', '01', 'g', '23-5-94');
		$id=$_SESSION["id"];
		$dt=date("Y/m/d");
		$sql = "INSERT INTO posts VALUES (null,'$id',  '$post', '$dt','white','black')";	
		$this->db->query($sql);
		
	}
	public function updated($user)
	{
		$this->load->database();
		//INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `email`, `mobile`, `gender`, `dob`) VALUES (NULL, 'a', 'b', 'c', 'd', '01', 'g', '23-5-94');
		$sql = "update users set  user_name= '$user[uname]',email= '$user[email]',mobile= '$user[mob]'";
			
		
		return $this->db->query($sql);
	}
	public function insert($user)
	{
		$this->load->database();
		//INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `email`, `mobile`, `gender`, `dob`) VALUES (NULL, 'a', 'b', 'c', 'd', '01', 'g', '23-5-94');
		$sql = "INSERT INTO users VALUES (null, '$user[fname]', '$user[lname]', '$user[uname]', '$user[email]', '$user[mob]', '$user[gender]', '$user[dob]')";
		$sql2 = "INSERT INTO logins VALUES (null,'$user[email]',  '$user[pass]', 0)";	
		$this->db->query($sql2);
		return $this->db->query($sql);
	}
}