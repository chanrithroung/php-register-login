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


    function listProduct() {
        $user_id = $_SESSION['user_id'];
        $select_post = "SELECT * FROM `products` WHERE `author_id` = '$user_id';";
        $result = db_connnet()->query($select_post);

        while($row = mysqli_fetch_assoc($result)) {
            $code = $row['code'];
            $name = $row['name'];
            $regular_price = $row['regular_price'];
            $sale_price = $row['sale_price'];
            $quantity = $row['quantity'];
            $created_at = $row['created_at'];
            $thumbnail = $row['thumbnail'] === 'DEFAULT' ? 'DEFAULT.png' : $row['thumbnail'];
            echo '
                 <tr class="align-middle">
                        <td>'.$code.'</td>
                        <td>'.$name.'</td>
                        <td>
                            <span class="primary-price">'.$regular_price.'$</span>
                        </td>
                        <td>
                            <span class="secondary-price">'.$sale_price.'$</span> 
                        </td>
                        <td>'.$quantity.'</td>
                        <td>
                            <img style="height: 90px; border-radius: 8px;" src="/uploads/'.$thumbnail.'" alt="Thumbnail">
                        </td>
                        <td>
                            <span class="mark-date">'.$created_at.'</span>
                        </td>
                        <td>
                            <button class="btn btn-success">EDIT</button>
                            <button class="btn btn-danger">DELETE</button>
                        </td>
                    </tr>
            ';
        }
    }



?>