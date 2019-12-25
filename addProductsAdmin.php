<?php
require_once "model.php";
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
add_products($name,$description,$price);




