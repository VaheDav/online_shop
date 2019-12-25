<?php
require_once "model.php";
$error=false;
    if (isset($_POST['submit']))
    {
        $firstName = $_POST['checkFirstName'];
        $lastName = $_POST['checkLastName'];
        $email = $_POST['checkMail'];
        $_SESSION['email']=$email;
        $sum=$_SESSION['sum'];
    if  (empty($firstName) || empty($lastName) || empty($email))
    {
        $error = true;
        $error_text="<h1>Լրացրեք դաշտերը</h1>";
        $_SESSION['error']=$error_text;
          header("location:cart.php");

    }
    if  (!$error)
    {
          $result=checkUser($firstName,$lastName,$email);
          foreach ($result as $value)
          {
             $_SESSION['users_id']=$value['user_id'];
          }
             $user_id=$_SESSION['users_id'];
             $sum=$_SESSION['totalSum'];
             addOrder($user_id,$sum);
             includes();
             $true_text="<h1>Ձեր պատվերը հաստատված է</h1>";
             $_SESSION['true']=$true_text;
             unset($_SESSION['cart']);
    }
}
