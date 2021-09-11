<?php 
$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
while($data=mysqli_fetch_array($result))
{ ?>
	
	 <div class="header-top">
		 
		 <!--container-->
		  <div class="container">
			 <div class="top-nav">
			 <div><img src="images/" id="section-1" class="img-responsive" alt=""/></div>
						<div class="logo">
						<a href="#"><img src="images/final-logo.png" id="section-1" class="img-responsive" alt=""style='width:200px;height:100px;'/></a>
						</div>
						<div class="menu">
						<ul id="nav">
							 <li><a href="index.php#section-1"  onclick="javascript:window.open('index.php#section-1','_self')">Home</a></li>
							 <li><a href="packages.php?catid=<?php echo $data[0]; ?>" onclick="javascript:window.open('category.php','_self')">Packages</a></li> 
							 <li><a href="about.php"> About</a></li>
						<li><a href="index.php#section-3"  onclick="javascript:window.open('index.php#section-3','_self')">Gallery</a></li>
                                 
							 <li><a href="index.php#section-5"   onclick="javascript:window.open('index.php#section-5','_self')"> Contact</a></li>
							
							 
							 <li><a href="admin/loginform.php"  onclick="javascript:window.open('index.php#section-1','_self')">Admin Login</a></li>
							 <div class="clearfix"></div>
						 </ul>
						 </div>
			 </div>
			  <div class="clearfix"> </div>
			

		 </div>
		 <!--/container-->
	 </div>
<?php }?>