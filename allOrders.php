<!doctype html>
<html lang="en">
<title></title>
<link rel="stylesheet" href="css\allOrdersStyle.css">
<head>

</head>
<body>

<?php
require_once ('includes\header.php');
require_once "model.php";
    $orders =getAllOrders();
    foreach ($orders as $order): ?>
<div class="main">
    <div>Order Id: <?= $order['id'] ?></div>
    <table>

        <th>Product Name</th>
        <th>Product Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Sum</th>
        <?php foreach ($order['orderProducts'] as $orderProduct): ?>
            <tr>
                <td><?= $orderProduct['name'] ?></td>
                <td><?= $orderProduct['description'] ?></td>
                <td><?= $orderProduct['price'] ?></td>
                <td><?= $orderProduct['qty'] ?></td>
                <td><?= ($orderProduct['price'] * $orderProduct['qty']) ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
    <div class="maininfo">
        <div>User Id: <?= $order['user_id'] ?></div>
        <div>User Name: <?= $order['first_name'] ?></div>
        <div>User Last Name: <?= $order['last_name'] ?></div>
        <div>Email: <?= $order['email'] ?></div>
        <div>Order Date: <?= $order['order_date'] ?></div>
        <div>Total: <?= $order['sum'] ?></div>
    </div>
</div>
<?php endforeach; ?>
</body>
</html>


