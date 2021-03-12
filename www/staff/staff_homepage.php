<?php 
session_start();
        
if(!isset($_SESSION['staff_login'])) 
    header('location:staff_login.php');   
?>
 <?php
                $staff_id=$_SESSION['staff_id'];
                include '../dbconn.php';
                $sql="SELECT * FROM staff WHERE email='$staff_id'";
                $result=  $con->query($sql);
                $rws=  $result->fetch_array();
                
                $id=$rws[0];
                $name=$rws[1];
                $dob=$rws[2];
                $department=$rws[4];
                $mobile=$rws[6];
                $email=$rws[7];
                $gender=$rws[9];
                
                $_SESSION['login_id']=$email;
                $_SESSION['name1']=$name;
                $_SESSION['id']=$id;
                ?>
            
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staff Home</title>
        
        <link rel="stylesheet" href="../newcss.css">
    </head>
    <header>
        <?php include '../header.php' ?></header>
        <div class="displaystaff_content">
            
           <?php include 'staff_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name1']?></div>
            </div>
           
            <div class="customer_body">
             <div style="margin-left: 300px" class="content1">
                <p><span class="heading">Name: </span><?php echo $name;?></p>
            <p><span class="heading">Department: </span><?php echo $department;?></p>
            <p><span class="heading">Email: </span><?php echo $email;?></p>
            </div>
        </div>
    <?php include '../footer.php';?>
<?php
$date1=date('Y-m-d H:i:s');
$_SESSION['staff_date']=$date1;
?>
            
                