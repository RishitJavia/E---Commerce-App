<?php
session_start();
if(isset($_GET['s'])){
	
	session_destroy();
	session_start();
}
?>
<!DOCTYPE html>

<html lang="">
<head>
<title >Shop24</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>

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
<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a style="font-size:48px;weight:solid" href="Home.php">Shop24</a></h1>
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

?>


<a href="Index.php">
<div class="wrapper bgded overlay" style="background-image:url('https://v3k9p8g4.stackpathcdn.com/blog/wp-content/uploads/2018/02/E-Commerce-Japan-850x491.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <article>
      <div>
<br>
<br><br><br>
        <p class="heading">BIGGEST HAUL OF THE SEASON IS HERE!</p>
        <h2 class="heading">Come and enjoy some exciting offers...</h2>
        <p>From electronics to sanitary.. We take care of all your needs!</p>
      </div>
     
    </article>
  </div>
</div>
</a>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <article class="group">
      <div class="group btmspace-80">
        <div class="one_quarter first">
          <p class="font-xs">Free shipping!</p>
          <h6 class="heading">Everything you desire reaches your house in couple of hours..</h6>
        </div>
        <div class="three_quarter">
          <p>Our vision is to be earth's most customer-centric company; to build a place where people can come to find and discover anything they might want to buy online.</p>
          <p class="btmspace-30">All your basic necessities are taken care of by us. Everything available in your favourite brands&hellip;</p>
          
        </div>
      </div>
<hr>
<br>
    <h2>You might like..</h2>
      <figure>
        <ul class="nospace group overview">
          <li class="one_half"><<a href="Index.php?cat=<?php echo "Women\'s Clothing" ?>"><img src="https://www.ohhoexpress.online/image/landingpage/1533633971_women-fashion-banner.jpg" ></a></li>
          <li class="one_half"><a href="Index.php?cat=<?php echo "Women\'s Clothing" ?>"><img src="https://cdn.shopify.com/s/files/1/0925/5148/collections/SHOP_ALL_category__banner_grande.png?v=1552996248" ></a></li>
          <li class="one_half"><a href="Index.php?cat=<?php echo "Men\'s Clothing" ?>"><img src="https://technosyncratic.com/wp-content/uploads/2017/08/2dace265-d464-418f-a56f-4654a4532738-625x352.jpg" ></a></li>
          <li class="one_half"><a href="Index.php?cat=<?php echo "Men\'s Clothing" ?>"><img src="https://i0.wp.com/technozooo.com/wp-content/uploads/2019/05/London-Fashion-Week-January-2019.png?fit=970%2C551" ></a></li>
          <li class="one_half"><a href="Index.php?cat=<?php echo "Men\'s Watch" ?>"><img src="https://www.dhresource.com/0x0/f2/albu/g10/M01/3F/65/rBVaVl2sacCAAe9RAAHYXh3Jlgs32.jpeg"></a></li>
          <li class="one_half"><a href="Index.php?cat=<?php echo "Women\'s Jewellery" ?>"><img src="https://cdn11.bigcommerce.com/s-ls8hir/images/stencil/1280x1280/products/14795/16694/918GPT19__68972.1537024608.jpg?c=2&imbypass=on" ></a></li>
        </ul>
      </figure>
    </article>
    <div class="clear"></div>
  </main>
</div>
<a href="Index.php?cat=<?php echo "Kid\'s Grooming" ?>">
<div class="wrapper bgded overlay" style="background-image:url('https://www.bigbasket.com/media/uploads/flatpages/republic-day/t1/baby-1000new.jpg');">
  <article class="hoc container clear center"> 
    <div class="sectiontitle" style="margin-bottom:30px;"><br>
<br>
<br><br><br><br><br><br><br><br><br>
<br><br><br>
<br><br><br>
      <h6 class="heading"></h6>
      
    </div>

  </article>
</div>
</a>

<div class="wrapper row3">
  <section class="hoc container clear"> 

    <div class="sectiontitle">
<hr><br>
      <h6 class="heading">About Our Products..</h6>
      
    </div>


  </section>
</div>


<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 

    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Shop24</a></p>
    

  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>




<?php	
}
?>

</body>
</html>







