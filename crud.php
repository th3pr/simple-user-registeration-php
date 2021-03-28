<?php
include_once('config.php');

// Get All Data From Users
function getAllData (){
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Error Connecting to Database" . mysqli_errno($conn));
    }
    // View all Data in Table
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['id']."</td>" . "<td>" .$row['username']. "</td>". "<td>".$row['password']."</td>"."<td>".$row['email']."</td> <td><a href='./delete.php?id=".$row['id']."'>Delete</a></td> </td> <td><a href='./update.php'>Update</a></td></tr>";  
    }
}

// Get ID
function getID (){
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Error Connecting to Database" . mysqli_errno($conn));
    }

    // Get ID from Users Table
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value=". $id. ">".$id."</option>";

    }
}

// Update user
function updateUser (){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    $id       = $_POST['id'];

    $query = "UPDATE users SET username ='$username', password='$password', email='$email' WHERE id = $id";
    $result = mysqli_query($conn,$query) or die ("Query Fail ". mysqli_error($query));
}


// Sign up 
function signUp(){
    global $conn;
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


// Delete User
function deleteUser (){
    global $conn;
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id= $id";
    $result = mysqli_query($conn, $query);
    if ($result){
        echo "User ".$id." Deleted Successfully , Redirect after 3 seconds.";
        header( "refresh:3;url=users.php" );
    }
    

}
?>