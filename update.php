<?php 
    include_once('crud.php');

    
    // $query_user = "SELECT username FROM users WHERE id= $id";
    // $result_user = mysqli_query($conn ,$query_user);

    // update user
    if(isset($_POST['update'])){
        updateUser ();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
</head>
<body>
    <div>
        <p>update user</p>
        <form action="update.php" method="POST">
            <label for="id">Select id</label>
            <select name="id" id="id">
                <?php getID(); ?>
            </select><br>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php ?>"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="<?php ?>"><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php ?>">
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>
</html>