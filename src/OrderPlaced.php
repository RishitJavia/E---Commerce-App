<?php
session_start();
?>
<html lang="">
<head>
<title>Shop24</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
A.sub{
       padding: 10px 25px;
       float: right;
       text-decoration: none;
       display: inline-block;
	   margin-right:50px;
       font: bold 25px Arial, serif;
	   transition: 0.5s ease;
}
A.sub:link{
       Color:#FFFFFF;
	   background-color: #b30000;
	   text-align: right;
}
A.sub:visited{
       Color:#FFFFFF;
	   background-color: #b30000;
	   text-align: right;
}
A.sub:hover{
       Color:#FFFFFF;
	   background-color: #25488e;
	   text-align: right;
	   animation : example 4s infinite;
	   transform: scale(1.3,1.3);	   
}
A.sub:active{
       Color:#b30000;
	   background-color: #ffffff;
       text-align: right;
}
@keyframes example {
  0%   {color: #ffff00;}
  40%  {color: #008000;}
  50%  {color: #0000ff;}
  100% {color: #000000;}
}.one_half{
	transition: 0.5s ease;
}
.one_half:hover{
		   transform: scale(1.3,1.3);	   
}
.attr:hover{
	color:red;
}.label:hover{
	color:black	;
	background-color:white;
}
.label{
	padding:1% 3% 1% 0;

	text-align:right;
}
.t{

	font-size:24;
	width:100%;
}
.l{
	color:black;
	padding:1% 0% 1% 3%;
	text-align:left;
}
.attr:hover{
	color:red;
}
.label:hover{
	color:black	;
	background-color:white;
}
.label{padding:1% 0 1% 0; width:40%}
.in{padding:1% 0 1% 5%; width:100% ; }
.t{

	font-size:24;
	width:100%;
}
</style>
</head>
<body id="top" style="background-color:white">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a style="font-size:48px"  href="Home.php">Shop24</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li></li>
        <li><strong>For Enquiry:</strong><br>
          Contact@Shop24.com</li>
      </ul>
    </div>
  </header>
</div>
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear" style="margin-bottom:5%"> 
     <ul class="clear">
      <li class="active"><a href="Home.php">Home</a></li>
      <li><a class="drop" href="#">Men</a>
        <ul>
          <li><a href="Index.php?cat=<?php echo "Men\'s Clothing" ?>">Clothing</a></li>
          <li><a href="Index.php?cat=<?php echo "Men\'s Beauty and Grooming" ?>">Beauty and Grooming</a></li>
          <li><a href="Index.php?cat=<?php echo "Men\'s Watch" ?>">Watch</a></li>
          <li><a href="Index.php?cat=<?php echo "Men\'s Footwear" ?>">Footwear</a></li>
		</ul>
      </li>
	  <li><a class="drop" href="#">Women</a>
        <ul>
          <li><a href="Index.php?cat=<?php echo "Women\'s Clothing" ?>">Clothing</a></li>
          <li><a href="Index.php?cat=<?php echo "Women\'s Jewellery" ?>">Jewellery</a></li>		  
          <li><a href="Index.php?cat=<?php echo "Women\'s Beauty and Grooming" ?>">Beauty and Grooming</a></li>
          <li><a href="Index.php?cat=<?php echo "Women\'s Footwear" ?>">Footwear</a></li>		  
        </ul>
      </li>
	  <li><a class="drop" href="#">Kids</a>
        <ul>
          <li><a href="Index.php?cat=<?php echo "Kid\'s Clothing" ?>">Clothing</a></li>
          <li><a href="Index.php?cat=<?php echo "Kid\'s Grooming" ?>">Beauty and Grooming</a></li>
          <li><a href="Index.php?cat=<?php echo "Kid\'s Footwear" ?>">Footwear</a></li>		  
        </ul>
      </li>
	  <li><a class="drop" href="#">Electronics</a>
        <ul>
          <li><a href="Index.php?cat=<?php echo 'Mobile' ?>">Mobiles</a></li>
          <li><a href="Index.php?cat=<?php echo "Laptop" ?>">Laptops</a></li>
        </ul>
      </li>

	  		<?php if(!isset($_SESSION['Customer_ID'])){
			?>
				<li><a href="SignIn.php">Sign In</a></li>
		<?php }
			else{
			?>	
				<li><a href="User.php?cid=<?php echo $_SESSION['Customer_ID'] ?>">My Account</a></li>		
				<li><a href="Home.php?s=SignOut">Sign Out</a></li>		
		<?php	
			}
			?>
	  	  
      
    </ul>
  </nav>
</div>

<form action="#" method="post">

<div>
<table class="t" style="border-collapse: collapse;border-color: white">
<center >
<tr class="attr" ><td style="border-color: white"><input id="search" class="in" type = "text" placeholder="Search for products, brands and more" name="search" ></td><td><input style="font-weight:bold; color:white; background-color:#006699;padding:2.5% 0 2.5% 0;" class="in" type="submit" value="Search" ></td></tr>
</table>

</div>
</form>

<?php


$link = mysqli_connect("localhost", "root", "", "shop24");




if(isset($_REQUEST['search'])){
		
		$s = mysqli_real_escape_string($link, $_REQUEST['search']);
		$sql = "SELECT * from product ";
		$result= mysqli_query($link,$sql);
		echo $s;

while($row = mysqli_fetch_array($result))	
{
	if(stripos($row['Brand'], $s) !== false || stripos($row['Product_name'] , $s) !== false || stripos($row['Category'] , $s) || stripos($row['Description'] , $s) )
	{
	
	
?>		<div>
      <figure>
        <ul class="nospace group overview">
			<table style="border-collapse: collapse;border-color: white">
			<tr ><td width="40%" style="padding:0 0 5% 5%;border-color: white;background-color:white"><li class="one_half"> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'"/>'; ?></li></td>
			<td style="font-family:arial;padding:0 10% 5% 0;border-color: white;background-color:white;color:black"><ul>
					<p style="font-size:28;"><?php echo $row['Brand']."  ".$row['Product_name']; ?></p>
					<p style="font-size:20;padding:5%"><?php echo $row['Description'] . " "; ?></p>
					<p style="font-size:24;"><b><?php echo 'Rs. '.$row["Price"] ; ?></b></p>			
				</ul>
			<a class="sub" href="Order.php?pid=<?php echo $row['Product_ID'] ?>">Buy</a></td>
			</tr><hr>	
		  </table>
        </ul>		
      </figure>
	</div>
	<?php
}
}
}
else{
###################################################
$oid=$_GET['oid'];

$query = "select * from order1 where Order_ID ='".$oid."' ";
$result = mysqli_query($link,$query);
$row1 = mysqli_fetch_assoc($result);
$pid = $row1['Product_ID'];

$sql = "select * from product where Product_ID ='".$pid."' ";
$result= mysqli_query($link,$sql);
while($row = mysqli_fetch_array($result))
	
{
?>
<table class="t" style="border-collapse: collapse;border-color: white">
<center >
<tr class="attr"><th class="label" style="padding-right:2%">Order ID </th><td class="l" style="border-color: white"><?php echo $row1['Order_ID'] . " "; ?></td></tr>
<tr class="attr"><th class="label" style="padding-right:2%">Product ID </th><td class="l" style="border-color: white"><?php echo $row1['Product_ID'] . " "; ?></td></tr>
<tr class="attr"><th class="label" style="padding-right:2%">Customer ID </th><td class="l" style="border-color: white"><?php echo $row1['Customer_ID'] . " "; ?></td></tr>
<tr class="attr"><th class="label" style="padding-right:2%">First Name </th><td class="l" style="border-color: white"><?php echo $row1['First_Name'] . " "; ?></td></tr>
<tr class="attr"><th class="label" style="padding-right:2%">Last Name </th><td class="l" style="border-color: white"><?php echo $row1['Last_Name'] . " "; ?></td></tr>
<tr class="attr"><th class="label" style="padding-right:2%">Quantity </th><td  class="l" style="border-color: white"><?php echo $row1['Quantity'] . " "; ?></td></tr>
<tr class="attr"><th class="label" style="padding-right:2%">Address </th><td class="l"  style="border-color: white"><?php echo $row1['Address'] . " "; ?></td></tr>
<tr class="attr"><th class="label" style="padding-right:2%">Contact No </th><td  class="l" style="border-color: white"><?php echo $row1['Contact_No'] . " "; ?></td></tr>
<tr class="attr"><th class="label" style="padding-right:2%">Delivery Date </th><td  class="l" style="border-color: white"><?php echo $row1['Delivery_Date'] . " "; ?></td></tr>
<tr class="attr"><th class="label" style="padding-right:2%">Total </th><td  class="l" style="border-color: white"><?php echo "Rs. ".$row1['Total_Cost'] . " "; ?></td></tr>

</center>
</table>
		<div>
      <figure>
        <ul class="nospace group overview">
			<table style="border-collapse: collapse;border-color: white">
			<tr ><td width="40%" style="padding:0 0 5% 5%;border-color: white;background-color:white"><li class="one_half"> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'"/>'; ?></li></td>
			<td style="font-family:arial;padding:0 10% 5% 0;border-color: white;background-color:white;color:black"><ul>
					<p style="font-size:28;"><?php echo $row['Brand']."  ".$row['Product_name']; ?></p>
					<p style="font-size:20;padding:5%"><?php echo $row['Description'] . " "; ?></p>
					<p style="font-size:24;"><b><?php echo 'Rs. '.$row["Price"] ; ?></b></p>			
				</ul>
			</tr><hr>	
		  </table>
        </ul>		
      </figure>
	</div>
	<?php
}
}
?>
<div class="wrapper row5" style="margin-top:5%;">
  <div id="copyright" class="hoc clear"> 

    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Shop24</a></p>
    

  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>


</body>
</html>