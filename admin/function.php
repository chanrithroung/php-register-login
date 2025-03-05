<?php 
    require_once('../utils/db_connect.php');
    session_start();
    function creatPost() {
        $name = $_POST['name'];
        $regular_price = $_POST['regular_price'];
        $sale_price = $_POST['sale_price'];
        $quantity = $_POST['quantity'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $model_info = $_POST['model_info'];
        $product_detail = $_POST['regular_price'];
        $author_id = $_SESSION['user_id'];

        if($name && $regular_price && $sale_price && $quantity && $size && $color && $model_info && $product_detail) {            
            $insert_query  = "INSERT INTO `products`( `name`, `regular_price`, `sale_price`, `size`, `color`, `model_info`, `product_detail`, `author_id`) 
            VALUES ('$name','$regular_price','$sale_price','$size','$color','$model_info','$product_detail','$author_id');";
            db_connnet()->query($insert_query);
            echo '<div class="alert alert-success">Success to create product </div>';
        } else {
            // header("Location: dashboard.php?message=missing some field");
            echo '<div class="alert alert-danger">Fail to create product!</div>';
        }
    }




?>