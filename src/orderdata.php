<?php

session_start();
$link = mysqli_connect("localhost", "root", "", "shop24");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$fn = mysqli_real_escape_string($link, $_REQUEST['fn']);
$ln = mysqli_real_escape_string($link, $_REQUEST['ln']);
$add = mysqli_real_escape_string($link, $_REQUEST['add']);
$cono = mysqli_real_escape_string($link, $_REQUEST['cono']);
$qn = mysqli_real_escape_string($link, $_REQUEST['qn']);
$pid = $_SESSION['Product_ID'];
$date = date("Y-m-d");
$dd = date('Y-m-d', strtotime($date. ' + 7 days'));

if(isset($_SESSION['Customer_ID'])){
	$cid=$_SESSION['Customer_ID'];
} else{
    echo "You have to Sign Up First!! ";
}

$query = "SELECT * from product WHERE Product_ID='". $pid. "'";
$result = mysqli_query($link,$query);
if(mysqli_query($link, $query)){
    echo "34 successfully.$pid <br>";
} else{
    echo "30 ERROR: Could not able to execute $query. " . mysqli_error($link);
}

$row = mysqli_fetch_array($result);
$p= $row["Price"];
$tc=$p*$qn;

$sql = "INSERT INTO order1 (Product_ID,Customer_ID,First_Name,Last_Name,Address,Quantity,Contact_No,Total_Cost,Delivery_Date)
VALUES ('".$pid."','".$cid."','".$fn."','".$ln."','".$add."','".$qn."','".$cono."','".$tc."','".$dd."')";

$query = "select * from order1 ORDER BY Order_ID DESC LIMIT 1";
$result = mysqli_query($link,$query);
$row1 = mysqli_fetch_assoc($result);
$oid = $row1['Order_ID'];

if(mysqli_query($link, $sql)){
header('Location:OrderPlaced?oid='.$oid);
} else{
    echo "43 ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>