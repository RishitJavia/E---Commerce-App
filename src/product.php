<html lang="">
<head>
<title>Shop with us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<?php

$link = mysqli_connect("localhost", "root", "", "shop24");

$sql="select * from product";
$result= mysqli_query($link,$sql);

?>


<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html">shopwithus.com</a></h1>
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
  <nav id="mainav" class="hoc clear"> 
     <ul class="clear">
      <li class="active"><a href="index.html">Home</a></li>
<!--      <li><a class="drop" href="#">About Us</a>
        <ul>
          <li><a href="pages/gallery.html">Catageory</a></li>
          <li><a href="pages/basic-grid.html">Brands</a></li>
        </ul>
      </li>
-->	  <li><a class="drop" href="#">Men</a>
        <ul>
          <li><a href="MensClothing.php">Clothing</a></li>
          <li><a href="MensGrooming.php">Beauty and Grooming</a></li>
          <li><a href="MensWatch.php">Watch</a></li>
          <li><a href="MensFootwear.php">Footwear</a></li>
		</ul>
      </li>
	  <li><a class="drop" href="#">Women</a>
        <ul>
          <li><a href="WomensClothing.php">Clothing</a></li>
          <li><a href="WomensGrooming.php">Beauty and Grooming</a></li>
          <li><a href="WomensFootwear.php">Footwear</a></li>		  
        </ul>
      </li>
	  <li><a class="drop" href="#">Kids</a>
        <ul>
          <li><a href="KidsClothing.php">Clothing</a></li>
          <li><a href="KidsGrooming.php">Beauty and Grooming</a></li>
          <li><a href="KidsFootwear.php">Footwear</a></li>		  
        </ul>
      </li>
	  <li><a class="drop" href="#">Electronics</a>
        <ul>
          <li><a href="ElecMobile.php">Mobiles</a></li>
          <li><a href="ElecLaptop.php">Laptops</a></li>
        </ul>
      </li>
      <li><a href="signin.php"><h1>Sign In</h1></a></li>	  
      <!--->
    </ul>
  </nav>
</div>
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
          <li class="one_half"><img src="https://www.ohhoexpress.online/image/landingpage/1533633971_women-fashion-banner.jpg" ></a></li>
          <li class="one_half"><img src="https://cdn.shopify.com/s/files/1/0925/5148/collections/SHOP_ALL_category__banner_grande.png?v=1552996248" ></a></li>
          <li class="one_half"><img src="https://technosyncratic.com/wp-content/uploads/2017/08/2dace265-d464-418f-a56f-4654a4532738-625x352.jpg" ></a></li>
          <li class="one_half"><img src="https://i0.wp.com/technozooo.com/wp-content/uploads/2019/05/London-Fashion-Week-January-2019.png?fit=970%2C551" ></a></li>
          <li class="one_half"><img src="https://www.dhresource.com/0x0/f2/albu/g10/M01/3F/65/rBVaVl2sacCAAe9RAAHYXh3Jlgs32.jpeg"></a></li>
          <li class="one_half"><img src="https://cdn11.bigcommerce.com/s-ls8hir/images/stencil/1280x1280/products/14795/16694/918GPT19__68972.1537024608.jpg?c=2&imbypass=on" ></a></li>
        </ul>
      </figure>
    </article>
    <div class="clear"></div>
  </main>
</div>
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

<div class="wrapper row3">
  <section class="hoc container clear"> 

    <div class="sectiontitle">
<hr><br>
      <h6 class="heading">About Our Products..</h6>
      
    </div>
    <div class="group">
      <article class="one_third first"><img class="btmspace-30" src="https://images.freekaamaal.com/post_images/1539324422.PNG" alt=""></a>
        <h6 class="nospace heading"><u>Eatables and more</u></h6>
        
        <p>All the kinds and varieties of food items and eatables are available in the store. We take a complete responsibility of delivering on time&hellip;</p>
        <footer class="nospace"><a class="btn">Read More</a></footer>
      </article>
      <article class="one_third"><img class="btmspace-30" src="https://i2.wp.com/www.stylingyou.com.au/wp-content/uploads/2013/02/NIVEA-Daily-Essentials-2.jpg?ssl=1" alt=""></a>
        <h6 class="nospace heading"><u>Complete Skin Care</u></h6>
        
        <p>We have a complete stock of all the types of Beauty products and in all the desirable brands. We ensure the quality check
K before delivering&hellip;</p>
        <footer class="nospace"><a class="btn" >Read More</a></footer>
      </article>
      <article class="one_third"><img class="btmspace-30" src="https://lh3.googleusercontent.com/proxy/eD3zGjMSzqHLOU9iqCf6_4tIRjbcR3F74t54qqHWF-8byH3CSAkdBbHKed0fITade0-2R6ziPWHMvlAC5USeKk7aBEP6OSESqKzdu_UBsP2VvtsPvv3qG8riejxoI09kF6vy5ex1pyYCrVDtyw" alt=""></a>
        <h6 class="nospace heading"><u>Electronics</u></h6>
        
        <p>Come and look for any electronic item you wish to buy with completely your choice of brands. We ensure a safe and defect less items delivery&hellip;</p>
        <footer class="nospace"><a class="btn" >Read More</a></footer>
      </article>
    </div>

  </section>
</div>

<div class="wrapper bgded overlay light" style="background-image:url('images/demo/backgrounds/03.png');">
  <article class="hoc cta clear"> 

    <h6 class="three_quarter first">Online Shopping Made Easy for you!</h6>
    <footer class="one_quarter"><a class="btn" href="#">Back to Home page&raquo;</a></footer>

  </article>
</div>



<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 

    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    

  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

<?php
/*

while($row = mysqli_fetch_array($result))
	
{
	$i=$row['Product_ID'];
	echo $row['Product_ID'] . " ";
	echo $row['Category'] . " ";
	echo $row['Category'] . " ";
	echo $row['Description'] . " ";
	echo $row['Brand'] . " ";
	echo $row['Price'] . " ";
	echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'"/>';
*/	
?> 
	
<!--	<a href="order.php?pid=<?php #echo $row['Product_ID'] ?>"><h1>Buy</h1></a> -->
	<?php
#		echo "<br>";
#}	
?>

</body>
</html>


