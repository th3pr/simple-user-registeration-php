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
        echo "<tr><td>".$row['id']."</td>" . "<td>" .$row['username']. "</td>". "<td>".$row['password']."</td>"."<td>".$row['email']."</td></tr>";  
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


?>