<?php

include("DB.php");

if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
    
    $result = mysql_query($sql) or die(mysql_error());
    
    if($row = mysql_fetch_array($result))
    {
        echo "Succesfully login as ".$row["username"];   
    }
}
?>
<html>

<head>

    <style>
        #login {
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.2), 0 1px 1px rgba(0, 0, 0, .2), 0 3px 0 #fff, 0 4px 0 rgba(0, 0, 0, .2), 0 6px 0 #fff, 0 7px 0 rgba(0, 0, 0, .2);
        }
        
        #login {
            position: absolute;
            z-index: 0;
        }
        
        #login:before {
            content: '';
            position: absolute;
            z-index: -1;
            border: 1px dashed #ccc;
            top: 5px;
            bottom: 5px;
            left: 5px;
            right: 5px;
            box-shadow: 0 0 0 1px #fff;
        }
        
        h1 {
            text-shadow: 0 1px 0 rgba(255, 255, 255, .7), 0px 2px 0 rgba(0, 0, 0, .5);
            text-transform: uppercase;
            text-align: center;
            color: #666;
            margin: 0 0 30px 0;
            letter-spacing: 4px;
            font: normal 26px/1 Verdana, Helvetica;
            position: relative;
        }
        
        h1:after,
        h1:before {
            background-color: #777;
            content: "";
            height: 1px;
            position: absolute;
            top: 15px;
            width: 120px;
        }
        
        h1:after {
            right: 0;
        }
        
        h1:before {
            background-image: linear-gradient(right, #777, #fff);
            left: 0;
        }

    </style>
</head>

<body>
    <form id="login" action="" method="post">
        <h1>Log In</h1>
        <fieldset id="inputs">
            <input id="username" name="username" type="text" placeholder="Username" autofocus required>
            <input id="password" name="password" type="password" placeholder="Password" required>
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Log in">
            <a href="reset_password.php">Forgot your password?</a>&nbsp;<a href="register.php">Register</a>
        </fieldset>
    </form>
</body>

</html>