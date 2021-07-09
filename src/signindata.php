<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "shop24");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$cfn = mysqli_real_escape_string($link, $_REQUEST['cfn']);
$cln = mysqli_real_escape_string($link, $_REQUEST['cln']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pass']);
$cp = mysqli_real_escape_string($link, $_REQUEST['cp']);
$eid = mysqli_real_escape_string($link, $_REQUEST['eid']);
 
$sql = "INSERT INTO customer (Customer_fname,Customer_lname, Password ,Customer_phone,Email_ID) 
VALUES ('".$cfn."','".$cln."','".$pass."','".$cp."','".$eid."')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


$query = "SELECT * from customer WHERE Email_ID='". $eid. "'";
$result = mysqli_query($link,$query);
if(mysqli_query($link, $query)){
		header("Location:Home.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}
$row = mysqli_fetch_array($result);

$cid= $row["Customer_ID"];
echo "$cid";

$_SESSION['Customer_ID']=$cid;
mysqli_close($link);
?>