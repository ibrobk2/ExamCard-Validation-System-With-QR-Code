<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <style>
      
      nav-item nav-link, a:link{
        color:#fff;
      }
    </style>

</head>
<body>
<!-- <nav class="navbar navbar-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Home</a>
      <a class="navbar-brand" href="login.php">Login</a>
      <a class="navbar-brand" href="register.php">Register</a>

    </div>
  </nav> -->
  <ul class="nav nav-tabs" style="background: darkgreen; color: #222;">
  <!-- <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li> -->
  <li class="nav-item">
    <a class="nav-link active" href="admin_dashboard.php" >Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="courseReg.php" style="color:#fff; font-weight: bold;">Course Registration</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" onclick = "<?php session_unset();?>" href="index.php" style="color:#fff; font-weight: bold;">Logout</a>
  </li>
</ul>



</body>
</html>