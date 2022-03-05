<?php //session_start();
include_once "server.php";

require_once 'phpqrcode/qrlib.php';

$path = 'qrcodes/';
$file = $path.uniqid().".png";

//Fetching data from courses table

if(isset($_SESSION['reg'])){ 
    
    
    $reg = $_SESSION['reg'];

    $query = "SELECT * FROM courses WHERE regNo = '$reg'";
    $result = mysqli_query($server, $query);

    if($row=mysqli_fetch_assoc($result)):


//text to output
$text = "NAME: ".$_SESSION['fname']." DEGREE: ".$_SESSION['department'].",   REG. NO.:".$_SESSION['reg'].", LEVEL: ".$_SESSION['level'].", COURSES: ".$row['cC1'].", ".$row['cC2'].", ".$row['cC3'].", ".$row['cC4'].", ".$row['cC5'].", ".$row['cC6'].", ".$row['cC7'].", ".$row['cC8'].", ".$row['cC9'].", ".$row['cC10'];
QRcode::png($text, $file, 'L', 5, 2);
//png(text, file, ECC_Level,Pixel_size, Frame_size);


       
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
     
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="images/alqalam_logo.png" alt="" width="80%">
            </div>
            <div class="col-md-8" style="text-align:center; font-family: sans-serif;">
                <h2>AlQalam University, Katsina</h2>
                <h4>Office Of The Registrar</h4>
                <h3>Student Examination Card</h3>
            </div>
            <div class="col-md-2">
                <?php 
                echo "<img src='".$file."'>";
 
                ?>
            </div>
        </div>
        <div class="row" style="font-family:serif; font-weight: 600;">
            <h4>NAME:<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];}; ?></h4>
            <h4>DEGREE: BSc. <?php if(isset($_SESSION['department'])){ echo $_SESSION['department'];}; ?></h4>
            <h4>SESSION: 2021/2022
            <h4>SEMESTER: First Semester
            <h4>REG.NO:<?php if(isset($_SESSION['reg'])){ echo $_SESSION['reg'];}; ?></h4> 
            <h4>LEVEL: <?php if(isset($_SESSION['level'])){ echo $_SESSION['level'];}; ?></h4>

        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;">SNO.</h4>
            <h4 class="col-md-3" style="border: 1px solid black;">Code</h4>
            <h4 class="col-md-4" style="border: 1px solid black;">Description</h4>
            <h4 class="col-md-4" style="border: 1px solid black;">Invilators Sign</h4>
        </div>
    <?php
   
    ?>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "1";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC1'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT1'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "2";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC2'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT2'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "3";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC3'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT3'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "4";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC4'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT4'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "5";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC5'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT5'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "6";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC6'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT6'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "7";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC7'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT7'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "8";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC8'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT8'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "9";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC9'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT9'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <div class="row course" style="font-family:serif; font-weight: 600;">
            <h4 class="col-md-1" style="border: 1px solid black;"><?php  echo "10";?></h4>
            <h4 class="col-md-3" style="border: 1px solid black;"><?php echo $row['cC10'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php echo $row['cT10'];?></h4>
            <h4 class="col-md-4" style="border: 1px solid black;"><?php ?></h4>
        </div>
        <?php
        endif;
       
    }; 



        ?> 
        <button onclick="print();">Print</button>
        
    </div>
</body>
</html>