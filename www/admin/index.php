<?php
session_start();
include'../dbconn.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>  
        <meta charset="UTF-8">
        <title>Admin Login - Online Banking</title>
        
        <link rel="stylesheet" href="../newcss.css">
    </head>
<header>
<?php
include '../header.php'; ?>
</header>
<div class='content'>
<div class="user_login">
    <form action='' method='post' >
        <table align="center">
            <tr align="center"><td><span class="caption">Admin Login</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Username:</td></tr>
            <tr><td><input type="text" name="name" required></td></tr>
            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="pass" required></td></tr>
            <tr align="center"><td class="button1"><span ><input type="submit" name="login" value="Log In" class="button"></span></td></tr>
        </table>
    </form>
    <?php

    if(isset($_POST["login"]))
    {
        $name=$_POST["name"];
        $pass=$_POST["pass"];
        if($name!=""&&$pass!="")

        {
            $sql="SELECT * FROM admin WHERE login_id='$name' AND  pwd='$pass'";
            $result=$con->query($sql);
            echo"<pre>";
            print_r($result);
            if($result->num_rows == 1)
            {
                $_SESSION["name"]=$name;
                header("location: admin_hompage.php");
            }
            else
            {
                echo "invalid user or password";
            }

        }

    }

    ?>
            </div>
        </div>
          
<?php include '../footer.php';
?>
