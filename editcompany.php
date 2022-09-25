<?php
include_once "DB.php";
include_once "Company.php";
include_once "Customer.php";
include "Conversation.php";
include_once "lib/BladeOne.php";
use  eftec\bladeone\BladeOne;



$company=Company::getCompany($_GET['id']);

if(isset($_POST['action']) && $_POST['action']=='update'){
    $company->name=$_POST['name'];
    $company->adress=$_POST['adress'];
    $company->vat_code=$_POST['vat_code'];
    $company->company_name=$_POST['company_name'];
    $company->phone=$_POST['phone'];
    $company->email=$_POST['email'];
    $company->atnaujinti();
    header('location:index.php');
    die();
}


$blade=new BladeOne();
echo $blade->run("editcompany",  ["company"=>$company]);