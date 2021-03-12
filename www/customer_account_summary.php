<?php 
session_start();
        
if(!isset($_SESSION['uname']))
    header('location:index.php');   
?>
<?php
                $uname=$_SESSION['uname'];
                include 'dbconn.php';
                $sql="SELECT * FROM customer WHERE email='$uname'";
                $result=  $con->query($sql);
                $rws= $result->fetch_array();

                $account_no= $rws[0];
                $name= $rws[1];
                $gender=$rws[2];
                $acc_type=$rws[4];
                $address=$rws[5];
                $mobile=$rws[6];
                $email=$rws[7];
                $branch=$rws[9];
                $acc_status=$rws[10];

                $_SESSION['login_id']=$account_no;
                $_SESSION['name']=$name;
                ?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Home - Online Banking</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
    <header><?php include 'header.php' ?></header>
    <body>
        <div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
            
            
            <?php
                
                $sql="SELECT * FROM passbook".$_SESSION['login_id'] ;
                $result= $con->query($sql);

                while($rws= $result->fetch_array())
                {
                $balance=$rws[7];
                }
?>
            <div class="customer_body">
                <div class="content1">
            <p><span class="heading">Account No: </span><?php echo $account_no;?></p>
            <p><span class="heading">Branch: </span><?php echo $branch;?></p>
            </div>
            
            <div class="content2">
            <p><span class="heading">Balance: LKR </span><?php echo $balance;?></p>
            <p><span class="heading">Account status: </span><?php echo $acc_status;?></p>
           </div>
            
            
        </div>
    
               <?php include 'footer.php';?>
            
    </body>
</html>