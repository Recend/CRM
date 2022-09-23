<?php
include_once "DB.php";
include_once "Company.php";
include_once "Customer.php";
include "Conversation.php";
include_once "lib/BladeOne.php";
use  eftec\bladeone\BladeOne;


$companies=Company::getCompanies();
$customers=Customer::getCustomers();
$blade=new BladeOne();
echo $blade->run("create",  ["create"=>$customers, "companies"=>$companies,]);


if (isset($_POST['action']) &&  $_POST['action']=='insert'){
    $customers= new Customer($_POST['name'],
    $_POST['surname'],
    $_POST['phone'],
    $_POST['email'],
    $_POST['adress'],
    $_POST['position'],
    $_POST['company_id']);
    $customers->createCustomer();


    $conversation=new Conversation($_POST['conversation'], $customers->id);
    $conversation->createCustomerConversation();
}
