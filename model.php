<?php
session_start();
$conn = new mysqli("localhost", "root", "", "online_shop");
if (!$conn) die(mysqli_connect_error($conn));

    function add_products($name, $description, $price)
    {
        global $conn;
        $query = "INSERT INTO  `products` (`name`,`description`,`price`) VALUES ('$name','$description','$price')";
        if (mysqli_query($conn, $query) === TRUE)
        {
            echo "done";
            $_SESSION['var'] = "<h1>Նոր ապրանքը հաջողությամբ ավելացվել է</h1>";
        }
        else
        {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
            header("location:index.php");

    }
    function get_products()
    {
		global $conn;
		$query="SELECT * FROM products";
		$result = mysqli_query($conn,$query);
		return $result;
	}
    function checkUser($firstName,$lastName,$email)
    {
         global  $conn;
         $sql_e = "SELECT * FROM users WHERE email='$email'";
         $res_e = mysqli_query($conn, $sql_e);
            header("location:cart.php");
         if (mysqli_num_rows($res_e)>0)
          {
             $get_userId="SELECT user_id FROM users WHERE `first_name` = '$firstName' && `last_name` = '$lastName' && `email` = '$email'";
             $result = mysqli_query($conn, $get_userId);
             return $result;
             $email_error = "Sorry... email already taken";
             echo "<h1>$email_error</h1>";
//             header("location:cart.php");
          }
         else
         {

             $addUser = "INSERT INTO users (first_name, last_name, email)
                            VALUES ('$firstName', '$lastName','$email')";
             $resultAddUser = mysqli_query($conn, $addUser);
             $getId="SELECT user_id FROM users WHERE `first_name` = '$firstName' && `last_name` = '$lastName' && `email` = '$email'";
             $resultGetId = mysqli_query($conn, $getId);
             return $resultGetId;

             header("location:cart.php");

         }

    }

//    id-n kam chi poxvum kam erku angamic a anum,bayc chisht a anum




function get_selected_products($ids)
    {
         global $conn ;
         $query="SELECT * FROM `products` WHERE `id`in ($ids)";
         $result = mysqli_query($conn,$query);
		 return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getUsers()
    {

        global $conn;
        $query="SELECT user_id FROM users ";
        $result = mysqli_query($conn,$query);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }


    function addOrder($user_id, $sum)
    {
        global $conn;
        $query = "INSERT INTO orders ( `user_id`, `sum`) VALUES ('$user_id','$sum')";
        $result = mysqli_query($conn, $query);
        return $result;
        unset($_SESSION['totalSum']);
        unset($_SESSION['users_id']);
        header("Location:test.php");

    }

    function getUserId($firstName,$lastName,$email){
        global $conn;
        $query="SELECT user_id FROM users WHERE `first_name` = '$firstName' && `last_name` = '$lastName' && `email` = '$email'";
        $result = mysqli_query($conn,$query);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);

    }

    function getOrderId()
    {
        global $conn;
        $query=mysqli_query($conn,"SELECT * FROM orders ORDER BY id DESC LIMIT 1 ");
        $print_data=mysqli_fetch_row($query);
        $_SESSION['orderId']=$print_data[0];
        $_SESSION['userId']=$print_data[1];
        print_r($_SESSION['orderId']);
        print_r($_SESSION['userId']);


    }
    function addOrderProducts()
    {

        global $conn;
        $res=$_SESSION['cart'];
        foreach ($res as $key=>$val)
        {
            echo "<pre>";
            $orderId = $_SESSION['orderId'];
            $prodId =$key;
            $qty = $val;
            $query="INSERT INTO order_products ( `order_id`, `product_id`,`qty`) VALUES ('$orderId','$prodId','$qty')";
            $result = mysqli_query($conn,$query);
        }
        unset($_SESSION['orderId']);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
        header("location:cart.php");


    }
    function includes()
    {
        getOrderId();
        addOrderProducts();
    }
    function getOrderProducts()
    {
        global $conn;
        $query="SELECT order_products.id AS order_product_id, products.name ,products.description, products.price ,order_products.order_id, order_products.qty,products.id AS prod_id FROM products INNER JOIN order_products ON order_products.product_id = products.id";
        $result= mysqli_query($conn,$query);
        return $result;

    }

    function getUserOrders()
    {
        global $conn;
        $query="SELECT orders.id, orders.user_id , orders.sum , orders.order_date , users.first_name, users.last_name , users.email FROM `orders` INNER JOIN users ON orders.user_id = users.user_id";
        $result= mysqli_query($conn,$query);
        return $result;

    }
    function getAllOrders()
    {
            global $last_id;
            print_r( $last_id);

        $userOrders = getUserOrders();
        $orderProducts = getOrderProducts();


       $orders = [];

    foreach ($userOrders as $userOrder) {
        $userOrder['orderProducts'] = [];
        $orders[$userOrder['id']] = $userOrder;
    }

    foreach ($orderProducts as $orderProduct) {

        $orders[$orderProduct['order_id']]['orderProducts'][] = $orderProduct;
    }

        return $orders;
    }










