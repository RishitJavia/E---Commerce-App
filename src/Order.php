<?php
session_start();
$pid=$_GET['pid'];
$_SESSION['Product_ID']=$pid;

if(isset($_SESSION['Customer_ID'])){
?>	


<html lang="">
<head>
<title>Shop24</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
.sub{
		width:100%;
       	padding:1% 0 1% 0;
       text-decoration: none;
       display: inline-block;
	   margin-right:50px;
       font: bold 25px Arial, serif;
}
.sub:link{
       Color:black;
	   background-color: #b30000;
}
.sub:visited{
       Color:black;
	   background-color: #b30000;
}
.sub:hover{
       Color:#FFFFFF;
	   background-color: #25488e;
}
.sub:active{
       Color:#b30000;
	   background-color: #ffffff;
}

.attr:hover{
	color:red;
}
.label:hover{
	color:black	;
	background-color:white;
}
.label{padding:1% 0 1% 0;}
.t{

	font-size:24;
	width:100%;
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
<script type="text/javascript" src="FormVald.js"></script>
</head>
<body id="top" style="background-color:white">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a style="font-size:48px" href="Home.php">Shop24</a></h1>
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







</body>
</html>

<?php










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

?>
<form action="orderdata.php" method="post">

<table class="t" style="border-collapse: collapse;border-color: white">
<center >
<tr class="attr"><th class="label">First Name </th><td style="border-color: white"><input id="fn" class="sub" type = "text" name="fn" style="color:black" ></td></tr>
<tr class="attr"><th class="label">Last Name </th><td style="border-color: white"><input id="ln" class="sub" type = "text" name="ln" style="color:black" ></td></tr>
<tr class="attr"><th class="label">Quantity </th><td style="border-color: white"><input id="qn" class="sub" type = "text" name="qn" style="color:black" ></td></tr>
<tr class="attr"><th class="label">Address </th><td style="border-color: white"><input id="add" class="sub" type = "text" name="add" style="color:black" ></td></tr>
<tr class="attr"><th class="label">Contact No </th><td style="border-color: white"><input id="cn" class="sub" type = "tel" name="cono"  style="color:black"></td></tr>

</center>
</table>
<input style="font-weight:bold;font-size:24px; color:white; background-color:#006699;padding:1.5% 0 1.5% 0;" class="in" type="submit" value="CONTINUE" onclick="FormValid()">
</form>

<?php
	
}
?>
<div class="wrapper row5" style="margin-top:5%;">
  <div id="copyright" class="hoc clear"> 

    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Shop24</a></p>
    

  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>


<?php    
} else{
    echo "You have to Sign Up First!! ";
	header('Location:SignIn.php');
}

?>
