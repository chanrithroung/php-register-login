

<?php 
    require_once('utils.php');
    require_once('db_connect.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username     = $_POST['username'];
        $email        = $_POST['email'];
        $password     = $_POST['password'];
        $confirm_pass = $_POST['confirm_password'];
        $sourceFile   = $_FILES['profile'];

        if( $username && $email && $password && $confirm_pass ) {
            if( $password != $confirm_pass ) {
                header("Location: register.php?message=Invalid confirmpass");
            } else {

                // Encryp password
                $password = md5($password);

                if (!$sourceFile['name']) {
                    $filename = 'DEFAULT';
                } else {
                    $filename = fileUploader($sourceFile);
                }
                
                $insert_query = "INSERT INTO `users`(`username`, `email`, `password`, `profile`)
                                        VALUES('$username', '$email', '$password', '$filename');";

                try {
                    $result = db_connnet()->query($insert_query);
                    if (!$result) {
                        throw new Exception("Email is alread in used!");
                    }
                } catch(Exception $e)  {
                    header("Location: register.php?message=Email is alread in used!");
                }
            
                header("Location: login.php");

            }
        } else header("Location: register.php?message=Missing some field");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="height: 100vh; display: flex; align-items: center; justify-content: center">

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="p-3 shadow">
            <?php 
                    if(isset($_GET['message'])) {
                        $message = $_GET['message'];
                        echo '<div class="alert alert-warning"> '.$message.' </div>';
                    }
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input name="username" class="form-control" type="text" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input name="email" class="form-control" type="text" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input name="password" class="form-control" type="text" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <label for="">Confirm Password</label>
                        <input name="confirm_password" class="form-control" type="text" placeholder="confirmpassword">
                    </div>

                    <div class="mb-3">
                        <label for="">Profile</label>
                        <input name="profile" class="form-control" type="file">
                    </div>


                    <button type="submit" class="btn btn-primary px-5">Register</button>
                </form>

            </div>
        </div>
    </div>
    </div>
    
</body>
</html>