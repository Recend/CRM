<?php
include_once "DB.php";
include_once "Company.php";
include_once "Customer.php";
include "Conversation.php";
include_once "lib/BladeOne.php";
use  eftec\bladeone\BladeOne;

$company=Company::getCompanies();
$blade=new BladeOne();
echo $blade->run("createcomp",  ["createcomp"=>$company]);


if (isset($_POST['action']) &&  $_POST['action']=='insert'){
    $company= new Company(
        $_POST['name'],
        $_POST['adress'],
        $_POST['vat_code'],
        $_POST['company_name'],
        $_POST['phone'],
        $_POST['email'],
        );
    $company->prideti();
}