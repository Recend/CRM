<?php
include_once "DB.php";
include_once "Company.php";
include_once "Customer.php";
include "Conversation.php";
include_once "lib/BladeOne.php";
use  eftec\bladeone\BladeOne;

//
//$customer=Customer::getCustomers();
//foreach ($customer as $c){
//  echo $c->name." ".$c->surname. "<br>";
//
//}

$customers=Customer::getCustomers();
$blade=new BladeOne();
echo $blade->run("customers", ["customers"=>$customers]);


$companies=Company::getCompanies();
$blade=new BladeOne();
echo $blade->run("companies",["companies"=>$companies]);



//$company=new Company('KABAS', 'babas','123', 'maxima','43647', 'asdas@gmail.com');
//$company->prideti();

//$c=Company::getCompany(29);
//$c->name='STORAS';
//$c->atnaujinti();

//$del=Company::getCompany(33);
//$del->istrinti();



