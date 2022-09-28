<?php
include_once "DB.php";
include_once "Company.php";
include_once "Customer.php";
include_once "Conversation.php";
include_once "lib/BladeOne.php";
use  eftec\bladeone\BladeOne;


$customer=Customer::getCustomer($_GET['id']);
$companies=Company::getCompanies();
$conversation=Conversation::getConversation($_GET['id']);


if (isset($_POST['action']) &&  $_POST['action']=='update'){
       $customer->name=$_POST['name'];
       $customer->surname=$_POST['surname'];
       $customer->phone=$_POST['phone'];
       $customer->email=$_POST['email'];
       $customer->adress=$_POST['adress'];
       $customer->position=$_POST['position'];
       $customer->company_id=$_POST['company_id'];
       $customer->atnaujinti();

       $conversation->customer_id=$_POST['id'];
       $conversation->conversation=$_POST['conversation'];
       $conversation->editCustomerConversation();

}


$blade=new BladeOne();
echo $blade->run("edit",  ["customer"=>$customer, 'companies'=>$companies, "conversation"=>$conversation]);