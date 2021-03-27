<?php 
include_once('config.php');
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];

    // Form Validation
    if(empty($username)){
        echo "Please Enter Your Username";
    }
    elseif(strlen($username) < 3){
        echo "Username Must not be less than 3 charachters";
    }
    elseif(empty($password)){
        echo "Please Enter Your Password";
    }

    // Database Query
    $query = "INSERT INTO USERS(username,password,email) VALUES('$username','$password','$email')";

    $result = mysqli_query($conn,$query);

    if($result){
        echo "Data stored successfully";
    }else{
        die ("Query Faild ". mysqli_errno($conn));
    }


}
?>