<?php
session_start();

if(!isset($_SESSION['name']))
    header('location:adminlogin.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Homepage</title>
        
        <link rel="stylesheet" href="../newcss.css">
    </head>
    <header>
        <?php include '../header.php' ?>
    </header>
        <div class='content'>
            
           <?php include 'admin_navbar.php' ?>
            <div class='admin_staff'>
               
                <ul>
                    <li><b>Staff</b></li>
       <li> <a href="addstaff.php">Add staff member</a></li>
        <li><a href="display_staff.php">Edit staff member</a></li>
        <li> <a href="../New%20folder/delete_staff.php">Delete staff</a></li>
        </ul>
        </div>
            <div class='admin_customer'>
                <ul>
                   <li><b>Customer</b></li>
        <li><a href="../New%20folder/addcustomer.php">Add Customer</a></li>
       <li> <a href="../New%20folder/display_customer.php">Edit customer</a></li>
       <li> <a href="../New%20folder/delete_customer.php">Delete customer</a></li>
        </div>
        </div>
        <?php include '../footer.php';?>
    </body>
</html>