<?php
include ("connect.php");
mysql_select_db("hr") or die ( 'Unable to select database.(login)' );
$username= $_POST['username'];
$password= $_POST['password'];
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];

$sql="INSERT INTO login (userid,firstname, lastname, password) VALUES ('$username','$firstname','$lastname','$password')";
if(mysql_query($sql)){
		header("location: login-page.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
}
?>