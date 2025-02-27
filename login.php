
<?php
    require_once('db_connect.php');
    session_start();

    if (!empty($_SESSION['user_id'])) {
        header("Location: dashboard.php");
    }

    if($_SERVER['REQUEST_METHOD']  == 'POST') {
        $username_email = $_POST['username_email'];
        $password = $_POST['password'];
        $password = md5($password);

        $select_qeury = "SELECT * FROM `users` WHERE (`username` = '$username_email' OR `email` = '$username_email') AND `password` = '$password';";

        $result = db_connnet()->query($select_qeury);

        $user = mysqli_fetch_assoc($result);

        if(!empty($user)) {
           
            $_SESSION['user_id'] = $user['id'];
            header("Location: dashboard.php");
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        input[type="password"]::placeholder {
            font-size: 20px !important;
            letter-spacing: 3px;
        }
    </style>
</head>

<body style="height: 100vh; display: flex; align-items: center; justify-content: center">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="p-4 shadow">
                <h3>LOGIN</h3>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    echo '<div class="alert alert-danger"> Invalid Credentail </div>';
                }

            ?>
                
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Username or Email</label>
                        <input name="username_email" class="form-control" type="text" placeholder="username or email">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input name="password" class="form-control" type="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                    </div>

                    <div class="my-4">
                        <a href="register.php">Register</a>
                    </div>

                    <button type="submit" class="btn btn-primary px-5">Login</button>
                </form>

            </div>
        </div>
    </div>
    </div>
    
</body>
</html>