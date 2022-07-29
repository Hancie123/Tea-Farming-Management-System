<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'create_account'){
	$save = $crud->create_account();
	if($save)
		echo $save;
}
if($action == 'get_users'){
	$get = $crud->get_users();
	if($get)
		echo $get;
}
if($action == 'send_chat'){
	$save = $crud->send_chat();
	if($save)
		echo $save;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'load_convo'){
	$get = $crud->load_convo();
	if($get)
		echo $get;
}
if($action == 'read_msg'){
	$save = $crud->read_msg();
	if($save)
		echo $save;
}