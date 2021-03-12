<?php
$con=new mysqli('localhost','root','','bank');
if($con->connect_errno)
{
    echo $con->connect_error;
    Die();
}

?>