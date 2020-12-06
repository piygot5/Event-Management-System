<?php 
include('includes/header.php');



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--owlcss-->
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>FIESTA</title>
    <link rel="icon" type="image/jpg" href="C:\Users\HP\Desktop\first\fiesta.jpg"  />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <style >
		 #tagline {
    float:right;
    padding-right: 200px;
  font-family: 'Kaushan Script', cursive;
  text-align: center;
  font-size: 35px;
  color: #0052cc; 
}

a:hover {
  cursor: pointer;
}

.newfont {

font-family: 'Abel', sans-serif;

}
.card-body
{
	height: 210px;
}
 
     </style>
}

  </head>
  <body>
  	<body>
    <div class="wrap">
        <div class="left">
          <span class="fiesta" style="font-size:40px;cursor:pointer;text-align: left" onclick="openNav()">&#9776; FIESTA</span>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Back to Home</a>
            <br>
            <a href="#">What's new? </a>
            <br>
            <a href="contact.php">Any issue? Contact us </a>
            <br>
            <a href="#">Subscribe to newsletter</a>
          </div>
        <div class="right" >
			<div id="tagline">
			<a href="createevents.php" style="padding-right:100px;text-decoration:none">Create Event</a>
			<a href="includes/handlers/logout.php" style="text-decoration:none">Logout</a>
			</div>
          
        </div>
      </div>



   

<div class="container" style="margin-top: 70px;" align="center" >
	<form action="index.php" method="POST">
	<div class="form-group">	
	<div class="row" style="padding-left:300px;">
		<div class="col-4 mr-4" style="border-top-style: none;border-right-style: none;border-left-style: none;">
			<h2 style="font-family: 'Lobster', Georgia, Times, serif;font-size: 50px;
 line-height: 100px;color: #0052cc;">Category</h2>
		      <select class="form-control searchform" id="sel1" name="cat" value="<?php echo $cat;?>" style="border: 1px solid #0052cc;
    border-radius: 3px;">
		        <option>All</option>
		        <option>Technology</option>
		        <option>Music</option>
		        <option>Business</option>
		        <option>Cultural</option>
		      </select>
		</div>	
		<div class="col-4" style="border-top-style: none;border-right-style: none;border-left-style: none;;">
			<h2 style="font-family: 'Lobster', Georgia, Times, serif;font-size: 50px;
 line-height: 100px;color: #0052cc;">Location</h2>
	      <select class="form-control " id="sel1" name="loc" style="border: 1px solid #0052cc;
    border-radius: 3px;">
	        <option>All</option>
	        <option>Mumbai</option>
	        <option>Navi Mumbai</option>
	    </select>
		</div>
	</div>
	</div>
	<span>
    <button  name="Search" class="button" style="background-color: #ffffff;border: 2px solid #0052cc;"><span style="color:#0052cc">Search</span></button></span>
    </form>
</div>
 
  <!--<form action="index.php" method="POST">
    <div class="form-group">
      <h2>category</h2>
      <select class="form-control searchform" id="sel1" name="cat" value="<?php echo $cat;?>">
        <option>All</option>
        <option>Technology</option>
        <option>Music</option>
        <option>Business</option>
        <option>Cultural</option>
      </select>
      <br>
      <h2>location</h2>
      <select class="form-control col-md-4" id="sel1" name="loc">
        <option>All</option>
        <option>Mumbai</option>
        <option>Navi Mumbai</option>
        
      </select>
    </div>
    <button name="Search">Search</button>
  </form>-->


<?php

if(isset($_POST['Search']))
{
	$cat=$_POST['cat'];
	$loc=$_POST['loc'];
	echo "<div class='newfont' style='font-family:Times New Roman; text-align: center;font-size: 30px;
	line-height: 100px;color: #0052cc;'>You have Searched for <b><u>".$cat."</u></b> at location <b><u>".$loc."</b></u></div><br>";
	if($cat=="All" && $loc=="All")
	{
		$sql="SELECT * from posts";
	}
	elseif ($cat!="All"&& $loc=="All") {
		$sql="SELECT * from posts WHERE category='$cat'";
		# code...
	}
	elseif ($loc!="All" && $cat=="All") {
		$sql="SELECT * from posts WHERE city='$loc'";
		# code...
	}
	else
	{
		$sql="SELECT * from posts WHERE category='$cat' AND city='$loc'";
	}
	

	
	
	$query = mysqli_query($con, $sql);
	if(mysqli_num_rows($query)==0)
	{
		echo "<h1 >ZERO</h1>";
	}
				//$row = mysqli_fetch_array($query);
				$count=0;
				while($row = mysqli_fetch_array($query))
				{
						
							//$images=$row['image'];
						$count++;


						$images=$row['image'];
						$title=$row['title'];
						//echo $title;
					    $eventimg="<img src='$images'>";
						?>
						
						
							<div class="Search ">
													 <div class="card " data-aos="fade-up"
					     data-aos-duration="2000">
										   	<div class="hovereffect">
										        <img src='<?php echo $images?>' class="card-img-top" alt="..." >
										        <div class="overlay">
										           <h2><?php echo $row['cost']; ?></h2>
										           <a class="info" href="<?php echo $title; ?>">Register</a>
										        </div>
										    </div>
								        
								        <div class="card-body">
								          <!--  <h5 class="card-title">Card title</h5>-->
								            <p class="card-text"><b>
			            	<?php echo $title; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-calendar" style="font-size:24px"></i>
			            	<?php echo $row['edate']; ?>
			            	<br>
			            	<div class="venue">Venue:<?php echo $row['venue'].",".$row['city']; ?></div>
			            	<br>
			            	<div class="category">Category:<?php echo $row['category']; ?></div>
			            </p>
								        </div>
								        
								    </div>
							</div>
						
						
	    	
	    <!--</div>-->


	    <?php
	    if($count%4==0)
						{
							echo"<br>";
						}
				}
	/*$sql = "SELECT * FROM posts WHERE category='$cat' OR city='$loc';
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
	    
	    while($row = mysqli_fetch_array($result)) {
	    	$title=$row['id'];
	        echo $title;
	    }
	} else {
	    echo "0 results";
	}*/
}



?>


</div>
<br>
<br>
<br>
<br>
<br>


<div class="parallax"></div>

<div class=container-fluid style="margin-left: 35px;">
	<br><center><button type="button" class="btn btn-success btn-lg" style="float: center;  width: 240px;  margin-right: 45px; margin-bottom: 10px" data-aos="fade-down"
     data-aos-duration="1000">Technology Events</button></center>
    	<div class="owl-carousel owl-theme">
    		<?php

				$query = mysqli_query($con, "SELECT * from posts WHERE category='Technology' LIMIT 8");
				//$row = mysqli_fetch_array($query);
				while($row = mysqli_fetch_array($query))
				{
						$images=$row['image'];
						$title=$row['title'];
					    $eventimg="<img src='$images'>";
					    //echo"$eventimg";?>
					    <div class="item">

			   <div class="card " data-aos="fade-up"
     data-aos-duration="2000">
					   	<div class="hovereffect">
					        <img src='<?php echo $images?>' class="card-img-top" alt="..." >
					        <div class="overlay">
					           <h2><?php echo $row['cost']; ?></h2>
					           <a class="info" href="<?php echo $title; ?>">Register</a>
					        </div>
					    </div>
			        
			        <div class="card-body">
			          <!--  <h5 class="card-title">Card title</h5>--> 
			            <p class="card-text"><b>
			            	<?php echo $title; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-calendar" style="font-size:24px"></i>
			            	<?php echo $row['edate']; ?>
			            	<br>
			            	<div class="venue">Venue:<?php echo $row['venue'].",".$row['city']; ?></div>
			            	<br>
			            	<div class="category">Category:<?php echo $row['category']; ?></div>
			            </p>
			        </div>
			        
			    </div>
	    	
	    </div>
<?php
				}
			?>
    
	</div></div>

</div>



<div class="parallax1"></div>

<div class=container-fluid style="margin-left: 35px;">
	<br><center><button type="button" class="btn btn-success btn-lg" style="float: center;  width: 240px;  margin-right: 45px; margin-bottom: 10px" data-aos="fade-down"
     data-aos-duration="1000">Music Events</button></center>
    	<div class="owl-carousel owl-theme">
    		<?php

				$query = mysqli_query($con, "SELECT * from posts WHERE category='Music' LIMIT 8");
				//$row = mysqli_fetch_array($query);
				while($row = mysqli_fetch_array($query))
				{
						$images=$row['image'];
						$title=$row['title'];
					    $eventimg="<img src='$images'>";
					    //echo"$eventimg";?>
					    <div class="item">

			   <div class="card " data-aos="fade-up"
     data-aos-duration="2000">
					   	<div class="hovereffect">
					        <img src='<?php echo $images?>' class="card-img-top" alt="..." >
					        <div class="overlay">
					           <h2><?php echo $row['cost']; ?></h2>
					           <a class="info" href="<?php echo $title; ?>">Register</a>
					        </div>
					    </div>
			        
			        <div class="card-body">
			          <!--  <h5 class="card-title">Card title</h5>--> 
			            <p class="card-text"><b>
			            	<?php echo $title; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-calendar" style="font-size:24px"></i>
			            	<?php echo $row['edate']; ?>
			            	<br>
			            	<div class="venue">Venue:<?php echo $row['venue'].",".$row['city']; ?></div>
			            	<br>
			            	<div class="category">Category:<?php echo $row['category']; ?></div>
			            </p>
			        </div>
			        
			    </div>
	    	
	    </div>
<?php
				}
			?>
    
	</div></div>

</div>
 




 <div class="parallax2"></div>

<div class=container-fluid style="margin-left: 35px;">
	<br><center><button type="button" class="btn btn-success btn-lg" style="float: center;  width: 240px;  margin-right: 45px; margin-bottom: 10px" data-aos="fade-down"
     data-aos-duration="1000">Business Events</button></center>
    	<div class="owl-carousel owl-theme">
    		<?php

				$query = mysqli_query($con, "SELECT * from posts WHERE category='Business' LIMIT 8");
				//$row = mysqli_fetch_array($query);
				while($row = mysqli_fetch_array($query))
				{
						$images=$row['image'];
						$title=$row['title'];
					    $eventimg="<img src='$images'>";
					    //echo"$eventimg";?>
					    <div class="item">

			   <div class="card " data-aos="fade-up"
     data-aos-duration="2000">
					   	<div class="hovereffect">
					        <img src='<?php echo $images?>' class="card-img-top" alt="..." >
					        <div class="overlay">
					           <h2><?php echo $row['cost']; ?></h2>
					           <a class="info" href="<?php echo $title; ?>">Register</a>
					        </div>
					    </div>
			        
			        <div class="card-body">
			          <!--  <h5 class="card-title">Card title</h5>--> 
			            <p class="card-text"><b><?php echo $title; ?></b>
			            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-calendar" style="font-size:24px"></i>
			            	<?php echo $row['edate']; ?>
			            	<br>
			            	<div class="venue">Venue:<?php echo $row['venue'].",".$row['city']; ?></div>
			            	<br>
			            	<div class="category">Category:<?php echo $row['category']; ?></div>
			            </p>
			        </div>
			        
			    </div>
	    	
	    </div>
<?php
				}
			?>
    
	</div></div>

</div>
 
 <div class="parallax3"></div>

<div class=container-fluid style="margin-left: 35px;">
	<br><center><button type="button" class="btn btn-success btn-lg" style="float: center;  width: 240px;  margin-right: 45px; margin-bottom: 10px" data-aos="fade-down"
     data-aos-duration="1000">Cultural Events</button></center>
    	<div class="owl-carousel owl-theme">
    		<?php

				$query = mysqli_query($con, "SELECT * from posts WHERE category='Cultural' LIMIT 8");
				//$row = mysqli_fetch_array($query);
				while($row = mysqli_fetch_array($query))
				{
						$images=$row['image'];
						$title=$row['title'];
					    $eventimg="<img src='$images'>";
					    //echo"$eventimg";?>
					    <div class="item">

			   <div class="card " data-aos="fade-up"
     data-aos-duration="2000">
					   	<div class="hovereffect">
					        <img src='<?php echo $images?>' class="card-img-top" alt="..." >
					        <div class="overlay">
					           <h2><?php echo $row['cost']; ?></h2>
					           <a class="info" href="<?php echo $title; ?>">Register</a>
					        </div>
					    </div>
			        
			        <div class="card-body">
			          <!--  <h5 class="card-title">Card title</h5>--> 
			            <p class="card-text"><b><?php echo $title; ?></b>
			            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-calendar" style="font-size:24px"></i>
			            	<?php echo $row['edate']; ?>
			            	<br>
			            	<div class="venue">Venue:<?php echo $row['venue'].",".$row['city']; ?></div>
			            	<br>
			            	<div class="category">Category:<?php echo $row['category']; ?></div>
			            </p>
			        </div>
			        
			    </div>
	    	
	    </div>
<?php
				}
			?>
    
	</div></div>

</div>
 
    
   



 














  <script src="event1.js"></script>
<script src="login.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Optional JavaScript -->
    <script src="owl.carousel.min.js"></script>
    <script src="ol.js"></script>

  </body>
</html>