<?php 
    include('db_connect.php');
    
    session_start();
    if (empty($_SESSION['user_id']) ) {
        header("Location: login.php");
    } else {
        $user_id = $_SESSION['user_id'];

        // echo $user_id;

        $select_query = "SELECT * FROM `users` WHERE `id` = '$user_id';";
        $result = db_connnet()->query($select_query);

        $user = mysqli_fetch_assoc($result);

        $profile  = $user['profile'] === "DEFAULT" ? "DEFAULT.png" :$user['profile'];
        
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/css/them.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <div class="sidebar">
        <div class="main">
            <figure class="profile-container">
              <img class="avatar" src="./uploads/<?php echo $profile ?>" alt="Profile">
            </figure>
            <span class="author">Admin, <?php echo $user['username'] ?> </span>
        </div>



        <div class="logout-btn">
            <button class="btn btn-danger px-5 d-block mx-auto" data-bs-toggle="modal" href="#logout" role="button"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </div>
    </div>
    
</body>
</html>





<div class="modal fade" id="logout" aria-hidden="true" aria-labelledby="Logout" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">
            Are you sure you want ot logout?
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"></button> -->
         <button class="btn btn-primary" data-bs-dismiss="modal"> Cancel </button>
         <a href="logout.php" class="btn btn-outline-danger">Logout</a>
      </div>
    </div>
  </div>
</div>