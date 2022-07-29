<?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

	function login(){
		extract($_POST);
		$qry = $this->db->query("SELECT * FROM users where username = '".$username."' and password = '".md5($password)."' ");
		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'passwors' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
				return 1;
		}else{
			return 3;
		}
	}
	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:login.php");
	}

	function save_user(){
		extract($_POST);
		$data = " name = '$name' ";
		$data .= ", username = '$username' ";
		if(!empty($password))
		$data .= ", password = '".md5($password)."' ";
		$chk = $this->db->query("Select * from users where username = '$username' and id !='$id' ")->num_rows;
		if($chk > 0){
			return 2;
			exit;
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users set ".$data);
		}else{
			$save = $this->db->query("UPDATE users set ".$data." where id = ".$id);
		}
		if($save){
			return 1;
		}
	}
	function create_account(){
		extract($_POST);
		$data = " name = '$name' ";
		$data .= ", username = '$username' ";
		$data .= ", password = '".md5($password)."' ";
		$chk = $this->db->query("SELECT * FROM users where username = '$username' ")->num_rows;
		if($chk > 0){
			return json_encode(array("status"=>2,"msg"=>"Username already exist."));
			exit;
		}
		if($_FILES['img']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
						$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
					$data .= ", avatar = '$fname' ";

		}
			$save = $this->db->query("INSERT INTO users set ".$data);
		if($save){
			$login = $this->login();
			if($login==1)
			return json_encode(array("status"=>1));
		}
	}
	function get_users(){
		extract($_POST);
		$data = " name Like '%$filter%' ";
		$data .= " or username Like '%$filter%' ";
		$rdata = array();
		$get= $this->db->query("SELECT * FROM users where $data");
		while($row = $get->fetch_assoc()){
			$rdata[] = $row;
		}
		return json_encode($rdata);

	}
	function send_chat(){
		extract($_POST);
		$data = " message = '$message' ";
		$data .= ", user_id = '{$_SESSION['login_id']}' ";
		if(empty($convo_id)){
			$cdata = " user_ids = '$user_id,{$_SESSION['login_id']}' ";
			$cdata2 = " user_ids = '{$_SESSION['login_id']},$user_id' ";
			$user_ids = $_SESSION['login_id'].",".$user_id;
			$chk = $this->db->query("SELECT * from thread where $cdata or $cdata2 ");
			if($chk->num_rows> 0){
				$convo_id = $chk->fetch_array()['id'];
			}else{
				$thread = $this->db->query("INSERT INTO thread set $cdata ");
				$convo_id = $this->db->insert_id;
			}
		}else{
			$qry =$this->db->query("SELECT * from thread where md5(id) ='$convo_id' ")->fetch_array();
			$convo_id = $qry['id'];
			$user_ids = $qry['user_ids'];

		}
		$data .= ", convo_id = '$convo_id' ";
		$save = $this->db->query("INSERT INTO messages set $data");
		if($save)
			return json_encode(array('status'=>1,'convo_id'=>md5($convo_id),'convo_users'=>$user_ids));
	}
	function load_convo(){
		extract($_POST);
		$data = array();
		$get = $this->db->query("SELECT m.message,u.id,u.name,u.avatar FROM messages m inner join users u on u.id = m.user_id where md5(m.convo_id) = '$convo_id' ");
		while($row= $get->fetch_assoc()){
			$data[] = $row;
		}
		return json_encode($data);
	}
	function read_msg(){
		extract($_POST);
		if(isset($user_id) && $user_id > 0){
			$update = $this->db->query("UPDATE messages set status = 1 where md5(convo_id) = '$convo_id' and user_id=$user_id ");
			if($update){
				return 1;
			}
		}
	}
}