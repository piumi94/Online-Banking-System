<?php 
session_start();
        
if(!isset($_SESSION['name']))
    header('location:index.php');
?>
<!DOCTYPE html>
<?php
include '../dbconn.php';
$sql="SELECT * FROM staff";
$result=  mysqli_query($con,$sql) or die(mysqli_error($con));
$sql_min="SELECT MIN(id) from staff";
$result_min=  mysqli_query($con,$sql_min);
$rws_min=  mysqli_fetch_array($result_min);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Staff Details</title>
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
}
#button{
    border:none;
}
        </style>
        <link rel="stylesheet" href="../newcss.css">
    </head>
<header>
    <?php include '../header.php' ?>
    </header>
<body>
    <div class="displaystaff_content">
       <?php include 'admin_navbar.php' ?>
                    <div class="displaystaff">
                <form action="editstaff.php" method="POST">
            
                    <table align="center">
                        <caption align='center' style='color:#2E4372'><h3><u>Staff Details</u></h3></caption>
                        <th>id</th>
                        <th>name</th>
                        <th>gender</th>
                        <th>DOB</th>
                        <th>relationship</th>
                        <th>department</th>
                        <th>address</th>
                        <th>mobile</th>
                        <th>email</th>
                        <?php
                        while($rws=  mysqli_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='staff_id' value=".$rws[0];
                            if($rws[0]==$rws_min[0]) echo' checked';
                            echo "<td>".$rws[0]."</td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "<td>".$rws[9]."</td>";
                            echo "<td>".$rws[2]."</td>";
                            echo "<td>".$rws[3]."</td>";
                            echo "<td>".$rws[4]."</td>";
                            echo "<td>".$rws[5]."</td>";
                            echo "<td>".$rws[6]."</td>";
                            echo "<td>".$rws[7]."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                    
                    
                    <table align="center" id='button'>
                    
                        <tr>
                            <td><input type="submit" name="submit1_id" value="EDIT STAFF DETAILS" class='addstaff_button' ></td>
                        </tr>
                        
                    </table>
                    </form>
                
                    
</div>

          <?php include '../footer.php';?>
    </body>
</html>