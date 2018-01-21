<?php
   include ("connect.php");
   mysql_select_db("hr") or die ( 'Unable to select database.(login)' );

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      
      $myusername = $_GET['username'];
      $mypassword =  $_GET['password']; 
      
      $sql = "SELECT userid FROM login WHERE userid = '$myusername' and password = '$mypassword'";
$result = mysql_query( $sql ) or die ( 'Unable to execute query.' );
$num = mysql_numrows( $result );
if ( $num == 1 ) 
     {
         echo true;
      }else {
		echo false;      }
   }
?> 

