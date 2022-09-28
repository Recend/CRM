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
$companies=Company::getCompanies();
$blade=new BladeOne();
echo $blade->run("companies",["companies"=>$companies, "user"=>$user]);

if (isset($_GET['delete'])) {
    $companies = Company::getCompany($_GET['delete']);
    $companies->istrinti();

}

