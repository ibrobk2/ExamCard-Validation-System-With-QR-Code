
<?php   
// initializing variables
        $username = "";
        $email    = "";
        $errors = array(); 
        $password = "";

        include_once "server.php";
        include_once "errors.php";


    if(isset($_POST['birth_register'])){
        //Variables Declaration
        $reg_centre = mysqli_real_escape_string($server, $_POST['reg_centre']);
        $town = mysqli_real_escape_string($server, $_POST['town']);
        $cert_no = "";
        $LGA = mysqli_real_escape_string($server, $_POST['LGA']);
        $state = mysqli_real_escape_string($server, $_POST['state']);
        $volume = "";
        $date_of_reg = mysqli_real_escape_string($server, $_POST['date']);
        $full_name = mysqli_real_escape_string($server, $_POST['full_name']);
        $sex = mysqli_real_escape_string($server, $_POST['sex']);
        $date_of_birth = mysqli_real_escape_string($server, $_POST['date']);
        $place_of_birth = mysqli_real_escape_string($server, $_POST['place_of_birth']);
        $fathers_name = mysqli_real_escape_string($server, $_POST['fathers_name']);
        $mothers_name = mysqli_real_escape_string($server, $_POST['mothers_name']);
        $place_of_issue = mysqli_real_escape_string($server, $_POST['place_of_issue']);
        $name_of_registrar = "";

        
        // Inputs validation: to ensure that the form is correctly filled ...
        if(empty($reg_centre)){array_push($errors, "Registration Centre Name required");}
        if(empty($town)){array_push($errors, "Town/Village is required");}
        if(empty($LGA)){array_push($errors, "L.G.A. is required");}
        if(empty($date_of_reg)){array_push($errors, "State is required");}
        if(empty($full_name)){array_push($errors, "Full Name is required");}
        if(empty($sex)){array_push($errors, "Sex is required");}
        if(empty($place_of_birth)){array_push($errors, "Place of Birth is required");}
        if(empty($fathers_name)){array_push($errors, "Father's Name is required");}
        if(empty($mothers_name)){array_push($errors, "Mother's Name is required");}
        if(empty($place_of_issue)){array_push($errors, "Place of Issue is required");}



        // if($password!=$password2){
        //     array_push($errors, "Passwords Mismatched!");
        // }
        // To check whether user exist in the database
        $query = "SELECT * FROM birth_certificates WHERE full_name='$full_name' AND date_of_birth='$date_of_birth' LIMIT 1";
        $result = mysqli_query($server, $query);
        $user = mysqli_fetch_assoc($result);

        if($user){
            if($user['username']==$username){
                array_push($errors, "Username already exist.");

            }
            if($user['email']==$email){
                array_push($errors, "Email already exist.");

            }
        }
        // Finally register a user if there are no errors in the form

  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (id, name, username, email, password) 
  			  VALUES(null, '$fname', '$username', '$email', '$password')";
  	mysqli_query($server, $query);
  	$_SESSION['fname'] = $fname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['user_login'])) {
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
        $row = mysqli_fetch_assoc($results);
        $_SESSION['fname'] = $row['fullName'];

        $_SESSION['admin'] = $row['username'];

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
  
  ?>
  



        

    
