<?php 
    session_start();

    if(empty($_SESSION['user_id'])) {
        header("Location: login.php");
    } else {
        session_destroy();
?>
       
       <!DOCTYPE html>
       <html lang="en">
       <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Logout</title>
       </head>
       <body style="height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">

            <div class="container text-center alert alert-success" style="height: fit-content;">
                <h4>You have successfully logged out, see you next time.</h4>
               
            </div>    

            <div class="mt-5">
                <a class="btn btn-lg btn-success me-4" href="login.php">Regsiter</a>
                <a class="btn btn-lg btn-primary" href="register.php">Login</a>
            </div>
        
       </body>
       </html>

<?php 
    }
?>