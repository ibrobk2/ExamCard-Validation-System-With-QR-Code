
<?php   
// initializing variables
        $username = "";
        $email    = "";
        $errors = array(); 
        $password = "";
        $reg_num = "";

      

        include_once "server.php";
        include_once "errors.php";

// Student registration Section********
    // if(isset($_POST['student_reg'])){
    //     //Variables Declaration
    //     $reg_num = mysqli_real_escape_string($server, $_POST['regNo']);//Registration Number
    //     $level = mysqli_real_escape_string($server, $_POST['level']);//student Level
    //     $faculty = mysqli_real_escape_string($server, $_POST['faculty']); //Faculty
    //     $department = mysqli_real_escape_string($server, $_POST['department']);//Department
    //     $full_name = mysqli_real_escape_string($server, $_POST['fullName']);//Student Full Name
    //     $password = mysqli_real_escape_string($server, $_POST['password']);//Password
       
        
    //     // Inputs validation: to ensure that the form is correctly filled ...
    //     if(empty($reg_num)){array_push($errors, "Registration Number required");}
    //     if(empty($level)){array_push($errors, "Level is required");}
    //     if(empty($faculty)){array_push($errors, "Faculty is required");}
    //     if(empty($department)){array_push($errors, "Department is required");}
    //     if(empty($full_name)){array_push($errors, "Full Name is required");}
    //     if(empty($password)){array_push($errors, "Password is required");}



        // if($password!=$password2){
        //     array_push($errors, "Passwords Mismatched!");
        // }
        // To check whether user exist in the database
        // $query = "SELECT * FROM students WHERE regNo ='$reg_num'";
        // $result = mysqli_query($server, $query);
        

        // while($user = mysqli_fetch_assoc($result)){
        //     if($user['regNo']==$reg_num){
        //         array_push($errors, "Sorry, this Student already exist.");

        //     }
            // if($user['email']==$email){
            //     array_push($errors, "Email already exist.");

            // }
        // }
        // Finally register a student if there are no errors in the form

  // if (count($errors) == 0) {
  //	$password = md5($password);//encrypt the password before saving in the database

  	// $query = "INSERT INTO students(regNo, fullName, department, level, faculty, password) 
  	// 		  VALUES('$reg_num', '$full_name', '$department', '$level', '$faculty', '$password')";
  	// mysqli_query($server, $query);
  
  	// header('location: index.php');
    //   $_SESSION['regNo'] = $reg_num;
// 	  $_SESSION['success'] = "Registration Successful, You can Now Login";
//   }
// }

// *******************ADMIN LOGIN SECTION*******************
if (isset($_POST['admin_login'])) {
    $username = mysqli_real_escape_string($server, $_POST['username']);
    $password = mysqli_real_escape_string($server, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        // $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($server, $query);
        // if($results){
        //     $row = mysqli_fetch_assoc($results);
        //     $_SESSION['fname'] = $row['fullName'];

        //     $_SESSION['admin'] = $row['username'];
        // }
        

        if (mysqli_num_rows($results) == 1) {
           
          $_SESSION['username'] = $username;
        //   $_SESSION['success'] = "You are now logged in";
          header('location: admin_dashboard.php');
        }else {
            
            array_push($errors, "Invalid username/password");
            // header("location: login.php");
        }
    }
  }


  // *********************STUDENT LOGIN SECTION************************
if (isset($_POST['student_login'])) {
    $regNo = mysqli_real_escape_string($server, $_POST['regNo']);
    $password = mysqli_real_escape_string($server, $_POST['password']);
  
    if (empty($regNo)) {
        array_push($errors, "Registration Number is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        // $password = md5($password);
        $query = "SELECT * FROM students WHERE regNo='$regNo' AND password='$password'";
        $results = mysqli_query($server, $query);
        // $row = mysqli_fetch_assoc($results);
        // $_SESSION['fname'] = $row['fullName'];

        // $_SESSION['admin'] = $row['regNo'];

        if (mysqli_num_rows($results) == 1) {
           
        //   $_SESSION['student'] = $full_name;
        //   $_SESSION['success'] = "You are now logged in";
          header('location: student_dashboard.php');
        }else {
            
            array_push($errors, "Invalid username/password");
            // header("location: login.php");
        }
    }
  }
  
  //Exam Card Printing Code
  if(isset($_POST['examCard'])){
      $reg_number = $_POST['reg_number'];

      $query1 = "SELECT * FROM students WHERE regNo = '$reg_number'LIMIT 1";
      $result = mysqli_query($server, $query1);

      $row = mysqli_fetch_assoc($result);

    //   $_SESSION['regNo'] =  $row['regNo'];


      //test variables
     
      //echo $row['password'];

  }


//    //CHECKING IF GENERATE BTN WAS CLICKED
//    if(isset($_POST['examCard'])){

//     $reg_num = $_POST['reg_number'];
// //    echo $reg_num;
//     $query1 = "SELECT * FROM students WHERE regNo = '$reg_num'";
//     $result1 = mysqli_query($server, $query1);
    
//     $row = mysqli_fetch_assoc($result1);

//     if($row){
//         if($row['regNo']==$reg_num){
//         echo "It is good..";
//     }
// }


        //  $fullName = $row['regNo'];
        // if($result1){
        //     echo $fullName;

        // }

    

//    }
  ?>
  



        

    
