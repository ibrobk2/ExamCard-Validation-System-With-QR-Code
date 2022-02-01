<?php
 
// initializing variables
$username = "";
$email    = "";
$errors = array(); 
    include_once "server.php";
    include_once "process.php";
   
if(!isset($_SESSION['success'])){
    $_SESSION['logError'] = "You Must Login First!";
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<?php   
    if(isset($_POST['logout'])){
        session_unset();
        header("location: index.php");
    }



?>
<form action="home.php" method="post">
    <button name="logout">Logout</button>
    <h2>Welcome, <?php echo $_SESSION['username'];?></h2>
    <h3><?php  echo $_SESSION['success'];?></h3>
</form>
</body>
</html>