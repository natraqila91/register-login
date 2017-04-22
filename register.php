<?php

include("DB.php");

if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "INSERT INTO tbl_user (username, password) VALUES ('$username', '$password')";
    
    $result = mysql_query($sql) or die(mysql_error());
    
    if(!$result)
    {
        echo "Cannot add new user";
    }
    
    echo "Successfully add new user..";
}

?>


<html>
    <head><title>Register/Login Tutorial GitHub</title></head>
    <body>
        <h1>Register User</h1>
        <form action="" method="post">
            Username : <input type="text" name="username" placeholder="Username"> <br>
            Password : <input type="text" name="password" placeholder="Password"> <br>
            <button type="submit">Submit</button><button type="reset">Reset</button>
        </form>
        <a href="login.php">Click Here to Login..</a>
    </body>
</html>