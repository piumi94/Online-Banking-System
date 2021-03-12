<?php 
session_start();
        
if(!isset($_SESSION['uname']))
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personal Details</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head><header>
        <?php include 'header.php' ?>
    </header>        <div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['uname']?></div>
            </div>
            <br><br><br><br>
            <h3 style="text-align:center;color:#2E4372;"><u>Personal Details</u></h3>
            
            <?php
                $uname=$_SESSION['uname'];
                include 'dbconn.php';
                $sql="SELECT * FROM customer WHERE email='admin'";
                $result=  $con->query($sql);
                $rws= $result->fetch_array();
                
                
                $name= $rws[1];
                $account_no= $rws[0];
                $dob=$rws[3];
                $branch=$rws[9];
                $gender=$rws[2];
                $mobile=$rws[6];
                $email=$rws[7];
                $address=$rws[5];
                $acc_status=$rws[10];
                $acc_type=$rws[4];
                

                                
?>          <div class="customer_body">
            <div class="content3">
            <p><span class="heading">Name: </span><?php echo  $name; ?></p>
            <p><span class="heading">gender: </span><?php if($gender=='M') echo "Male"; else echo "Female";?></p>
            <p><span class="heading">Mobile: </span><?php echo $mobile;?></p>
            <p><span class="heading">Email: </span><?php echo $email;?></p>
            <p><span class="heading">Address: </span><?php echo $address;?></p>
            </div>
            <div class="content4">
            <p><span class="heading">Account No: </span><?php echo $account_no;?></p>

            <p><span class="heading">Branch: </span><?php echo $branch;?></p>

            
            <p><span class="heading">Account Type: </span><?php echo $acc_type;?></p>
            </div>
            </div>
        </div>
               <?php include 'footer.php';?>
            

</html>