<?php
session_start();
include_once "DB.php";
include_once "Company.php";
include_once "Customer.php";
include_once "Conversation.php";
include_once "Admin.php";
include_once "Superadmin.php";
include_once "lib/BladeOne.php";
use  eftec\bladeone\BladeOne;

if (isset($_GET['action']) && $_GET['action']=='logout'){
    Admin::logout();
}

if(isset($_POST['action'])){
    $pass= $_POST['password'];
    $user=Admin::login($_POST['username'], $pass);
//    $passhash= password_hash('admin',PASSWORD_BCRYPT);
//    print_r($passhash);
  if($user){
      header('location:index.php');
      die();
  }

}
$blade=new BladeOne();
echo $blade->run("login", []);


