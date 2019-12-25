<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="productstyle.css">
    <title>Document</title>
</head>
<body>

<?php
require_once 'model.php';
//session_start();

$result = get_products();
echo "<table >
   <tr>
         <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Count</th>
        <th>Add Products</th>
    </tr>";
$total=0;
foreach ($result as $value){
    echo "<pre>";
    $id = $value['id'];
    $name = $value['name'];
    $description = $value['description'];
    $price = ($value['price']);


    echo "<tr id=$id>
                 <td class='name'>$name</td>
                  <td class='description'>$description</td>
                  <td class='price'>$price</td>
                  <td class='countTd'>
                        <input  class='count' id=$id type='number' >
                  </td>
                  <td class='add' id=$id>
                        <button class='addbutton'>Add to Cart</button>
                  </td>
               </tr>";
}
echo "<tr>
              <td  colspan='5' style='text-align: center'>
                    <a href='cart.php'>
                        <button  class='orderbutton'>Պատվիրել<i class='fa fa-trash' aria-hidden='true'></i></button>
                    </a>
                </td>";
echo "</tr>";

echo '</table>';

?>
<script src="js/jquery.js" ></script>
<script src="js/script.js" ></script>
</body>
</html>
