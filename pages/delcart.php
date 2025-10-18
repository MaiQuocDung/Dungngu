<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete cart</title>
</head>
<body>
<?php
        session_start();
        $cart=$_SESSION['cart'];
        $id=$_GET['productid'];
        if($id == 0)
        {
            unset($_SESSION['cart']);
        }
        else
        {
            unset($_SESSION['cart'][$id]);
        }
            header("location:../pages/giohang.php");
        exit();
?>
</body>
</html>