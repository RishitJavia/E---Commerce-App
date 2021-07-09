<html lang="">
<head>
<title>Shop with us</title>
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

</style>
</head>
<body id="top" style="background-color:white">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="Home.php">shopwithus.com</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li></li>
        <li><strong>For Enquiry:</strong><br>
          shopwithus@gmail.com</li>
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
          <li><a href="Category.php?cat=<?php echo "Men\'s Clothing" ?>">Clothing</a></li>
          <li><a href="Category.php?cat=<?php echo "Men\'s Beauty and Grooming" ?>">Beauty and Grooming</a></li>
          <li><a href="Category.php?cat=<?php echo "Men\'s Watch" ?>">Watch</a></li>
          <li><a href="Category.php?cat=<?php echo "Men\'s Footwear" ?>">Footwear</a></li>
		</ul>
      </li>
	  <li><a class="drop" href="#">Women</a>
        <ul>
          <li><a href="Category.php?cat=<?php echo "Women\'s Clothing" ?>">Clothing</a></li>
          <li><a href="Category.php?cat=<?php echo "Women\'s Beauty and Grooming" ?>">Beauty and Grooming</a></li>
          <li><a href="Category.php?cat=<?php echo "Women\'s Footwear" ?>">Footwear</a></li>		  
        </ul>
      </li>
	  <li><a class="drop" href="#">Kids</a>
        <ul>
          <li><a href="Category.php?cat=<?php echo "Kid\'s Clothing" ?>">Clothing</a></li>
          <li><a href="Category.php?cat=<?php echo "Kid\'s Grooming" ?>">Beauty and Grooming</a></li>
          <li><a href="Category.php?cat=<?php echo "Kid\'s Footwear" ?>">Footwear</a></li>		  
        </ul>
      </li>
	  <li><a class="drop" href="#">Electronics</a>
        <ul>
          <li><a href="Category.php?cat=<?php echo 'Mobile' ?>">Mobiles</a></li>
          <li><a href="Category.php?cat=<?php echo "Laptop" ?>">Laptops</a></li>
        </ul>
      </li>
      <li><a href="signin.php">Sign Up</a></li>	  
      
    </ul>
  </nav>
</div>
<?php
session_start();

if(isset($_GET['cat'])){
	$cat=$_GET['cat'];
	$_SESSION['Category']=$cat;
?>	
	<div style="padding-right:5%;text-align:right;font-size:20;color:black">
	<b>Sort By </b><br>
	<a href="Sort.php?ord=<?php echo 'DESC' ?>&cat=<?php echo $cat ?>">Price -- High to Low</a><br><a href="Sort.php?ord=<?php echo 'ASC' ?>&cat=<?php echo $cat ?>">Price -- Low to High</a>
	</div>	
<?php

}
else{

?>	
	<div style="padding-right:5%;text-align:right;font-size:20;color:black">
	<b>Sort By </b><br>
	<a href="Sort.php?ord=<?php echo 'DESC' ?>">Price -- High to Low</a><br><a href="Sort.php?ord=<?php echo 'ASC' ?>">Price -- Low to High</a>
	</div>

<?php

}

$ord=$_GET['ord'];
$_SESSION['ord']=$ord;
$link = mysqli_connect("localhost", "root", "", "shop24");
if(isset($_GET['cat'])){
	$cat=$_GET['cat'];
	echo $cat;
	$sql="select * from product where Category ='". $cat. "' ORDER BY Price "."$ord";
}
else{
	$sql="select * from product ORDER BY Price "."$ord";
}
$result= mysqli_query($link,$sql);


while($row = mysqli_fetch_array($result))
	
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
?>

</body>
</html>


