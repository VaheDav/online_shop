<?php
session_start();
//print_r($_POST);
$action=$_POST['action'];

if  ($action=='add')
{
    $id=$_POST['id'];
    $_SESSION['cart'][$id]=1;

}

if  ($action=='update')
{
    $id=$_POST['id'];
    $val=$_POST['val'];
    $_SESSION['cart'][$id]=$val;
    print_r($_SESSION['cart']);
}


