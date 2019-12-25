<?php 
require_once('includes\header.php');


 ?>
<style></style>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="css\productstyle.css">
 	<title></title>
 </head>
 <body>
 
<?php 
	require_once ('model.php');
$result=get_products();
echo "<table class='table' border=1 color='grey'>";
echo"<tr>
        <th>Անուն</th>
        <th>Գին</th>
        <th>Նկարագրություն</th>
        <th>Ավելացնել զամբյուղում</th>
        
    </tr>";
foreach ($result as $value) {
	$id=$value['id'];
	$name=$value['name'];
	$price=$value['price'];
	$description=$value['description'];


	echo "<tr id=$id>
					<td class='name'>$name</td>
					<td class='price'>$price</td>
					<td class='description'>$description</td>
				   	<td><button class='add' >Add</button></td>
				   
	   </tr>";



    $_SESSION['id']=$id;
}


//print_r($_SESSION[]);
//print_r($id);
echo '</table>';

?>
 <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/user.js"></script>
 </body>
 </html>