<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\cartstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<?php

    require_once ('includes\header.php');
    require_once "model.php";
    if  (empty($_SESSION['cart']))
    {
     die("<h2>Ձեր պատվերը հաստատված է</h2>");
    }
    $keys=array_keys($_SESSION['cart']);
    $ids=implode(',',$keys);

    $all=get_selected_products($ids);

?>
<h1 class="cart_title">Իմ զամբյուղը</h1>

<?php
    echo "<table class='content-table' >";

    echo"<tr>
        <th>Անուն</th>
        <th>Գին</th>
        <th>Նկարագրություն</th>
        <th>Քանակ</th>
        
    </tr>";
    $total=0;
    $qty=0;
    foreach ($all as $value)
    {
        $array=array();
        $id=$value['id'];
        array_push($array,$id);
         foreach ($array as $prodId)
         {
             $_SESSION['prodId']=$prodId;
         }
            $_SESSION['id']=$id;
            $name=$value['name'];
            $_SESSION['name']=$name;
            $price=$value['price'];
            $description=$value['description'];
            $quant=$_SESSION['cart'][$id];
            $qty+=$quant;
            $sum=$quant*$price;
            $total+= $sum;


        echo "<tr id=$id>
			    <td class='name'>$name</td>
			    <td class='price'>$price". " դրամ"."</td>
			    <td class='description'>$description</td>
			    <td><input  class='quant' id=$id type='number' value=$quant></td>
		 </tr>";

    }

    $_SESSION['totalSum']=$total;
    $_SESSION['qty']=$qty;
        echo "<tr >
            <td class='total' colspan='2'>Ընդհանուր գումար</td>
            <td colspan='3' class='total_sum' >$total"." դրամ"."</td>";
        echo "</tr>";
    echo '</table>';
    $_SESSION['total']=$total;

?>


<span>
<?php

        if(isset($_SESSION['error']))
        {
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
?>
</span>



<form method="POST" action="confirmOrder.php">

    <div class="form-group">
        <label >First Name</label>
        <input name="checkFirstName" type="text" class="form-control" placeholder="First Name*">
    </div>
    <div class="form-group">
        <label >Last Name</label>
        <input name="checkLastName" type="text" class="form-control"  placeholder="Last Name*">
    </div>
    <div class="form-group">
        <label >Email address</label>
        <input name="checkMail" type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email*">
        <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>



    <tr>
        <td>
            <input  name="submit" type="submit"  class='confirmOrder btn-primary' value="Հաստատել պատվերը">
        </td>
    </tr>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/user.js"></script>

</body>
</html>