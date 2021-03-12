<?php 
session_start();
        include '../dbconn.php';
if(!isset($_SESSION['name']))
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Staff</title>
        
        <link rel="stylesheet" href="../newcss.css">
    </head>
    <header>

<?php include '../header.php'; ?>
    </header>
        <div class='content_addstaff'>
            <?php include 'admin_navbar.php' ?>
            <div  class='addstaff'>
        <form action="" method="POST">
             <table align='center'>
                 <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Add Staff</u></h3></td></tr>
                <tr>
                    <td> Staff's name</td>
                    <td><input type="text" name="name" required=""/></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td>
                        M<input type="radio" name="gender" value="M" />
                        F<input type="radio" name="gender" value="F" />
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="dob" required/>
                    </td>
                </tr>
               
                <tr>
                    <td>Relationship</td>
                    <td>
                        <select name="status">
                            <option value="unmarried">unmarried</option>
                            <option value="married">married</option>
                            <option value="divorced">divorced</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>
                        <select name="dept">
                            <option>revenue</option>
                            <option>developer</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Address:</td>
                    <td><textarea name="address" required></textarea></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="number" name="mobile" required/></td>
                </tr>

                <tr>
                    <td>Email id</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pwd" required/></td>
                </tr>
                
                <tr >
                    <td colspan="2" align='center' style='padding-top:20px' ><input type="submit" name="addstaff" value="ADD STAFF MEMBER" class='addstaff_button'/></td>
                </tr>
                </table>
        </form>
                <?php
                    if(isset($_POST["addstaff"]))
                    {
                        $name=$_POST["name"];
                        $gender=$_POST["gender"];
                        $dob=$_POST["dob"];
                        $status=$_POST["status"];
                        $dept=$_POST["dept"];
                        $address=$_POST["address"];
                        $mobile=$_POST["mobile"];
                        $email=$_POST["email"];
                        $pwd=$_POST["pwd"];

                        if($name!=""&&$gender!=""&&$dob!=""&&$status!=""&&$dept!=""&&$address!=""&&$mobile!=""&&$email!=""&&$pwd!="")
                        {
                            $sql="INSERT INTO staff(id,name,dob,relationship,deartment,address,mobile,email,pwd,gender)VALUES ([''],['$name'],['$dob'],['$status'],['$dept'],['$address'],['$mobile'],['$email'],['$pwd'],['$gender'])";
                            $con->query($sql);
                            echo "staff added";
                        }
                        else
                        {
                           echo "cant done";
                        }
                    }
                ?>
                </div>
        </div>
<?php include '../footer.php';?>

</html>