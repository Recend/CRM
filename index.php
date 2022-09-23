<?php
include_once "DB.php";
include_once "Company.php";
include_once "Customer.php";
include "Conversation.php";
include_once "lib/BladeOne.php";
use  eftec\bladeone\BladeOne;

if (isset($_GET['delete'])){
    $companies=Company::getCompany($_GET['delete']);
    $companies->istrinti();



}if (isset($_GET['deletee'])){
    $customers=Customer::getCustomer($_GET['deletee']);
    $conversation=Conversation::getConversation($_GET['deletee']);
    $customers->istrinti();
    $conversation->istrinti();
}

$customers=Customer::getCustomers();
$blade=new BladeOne();
echo $blade->run("customers", ["customers"=>$customers]);

$companies=Company::getCompanies();
$blade=new BladeOne();
echo $blade->run("companies",["companies"=>$companies]);









