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


$user=Admin::auth();

$customers=Customer::getCustomers();
$blade=new BladeOne();
echo $blade->run("customers", ["customers"=>$customers, "user"=>$user]);


if (isset($_GET['deletee'])){
    $customers=Customer::getCustomer($_GET['deletee']);
    $conversation=Conversation::getConversation($_GET['deletee']);
    $customers->istrinti();
    $conversation->istrinti();
    header('location:index.php');
}












