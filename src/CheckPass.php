<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "shop24");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$cn = mysqli_real_escape_string($link, $_REQUEST['cn']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pass']);
 
 
 
 
$sql = "SELECT * from customer where Customer_phone ='". $cn. "'";
$result = mysqli_query($link,$sql);
$row1 = mysqli_fetch_assoc($result);
$pw = $row1['Password'];

if($pass == $pw){
	$_SESSION['Customer_ID']=$row1['Customer_ID'];
	header('Location:Home?cid='.$row1['Customer_ID']);
} else{
	header('Location:SignUp');
}


mysqli_close($link);
?>