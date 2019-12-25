<?php 
session_start();
$action=$_POST['action'];
require_once 'model.php';
if ($action=='add'){
   $name=$_POST['name'];
   $price=$_POST['price'];
   $des=$_POST['des'];
    add_product($name,$price,$des);

}




  


	
