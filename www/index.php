<?php
session_start();
include'dbconn.php';
?>

<!DOCTYPE html>
<html>
<head>
    <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>
    <meta charset="UTF-8">
    <title>Admin Login - Online Banking</title>

    <link rel="stylesheet" href="newcss.css">
</head>
<header>
    <?php
    include 'header.php'; ?>
</header>
<div class='content'>
    <div class="user_login">
        <form action='' method='post' >
            <table align="center">
                <tr align="center"><td><span class="caption">Coustomer login</span></td></tr>
                <tr><td colspan="2"><hr></td></tr>
                <tr><td>Username:</td></tr>
                <tr><td><input type="text" name="uname" required></td></tr>
                <tr><td>Password:</td></tr>
                <tr><td><input type="password" name="upass" required></td></tr>
                <tr align="center"><td class="button1"><span ><input type="submit" name="ulogin" value="Log In" class="button"></span></td></tr>
            </table>
        </form>
        <?php

        if(isset($_POST["ulogin"]))
        {
            $uname=$_POST["uname"];
            $upass=$_POST["upass"];
            if($uname!=""&&$upass!="")

            {
                $sql="SELECT email,password FROM `customer` WHERE email='$uname' AND  password='$upass'";
                $result=$con->query($sql);
                echo"<pre>";
                print_r($result);
                if($result->num_rows == 1)
                {
                    $_SESSION["uname"]=$uname;
                    header("location: customer_account_summary");
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

<?php include 'footer.php';
?>
