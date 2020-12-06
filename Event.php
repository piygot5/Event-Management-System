<?php 
include("includes/header.php");

if(isset($_GET['title'])) {
	$titles = $_GET['title'];
	$user_details_query = mysqli_query($con, "SELECT * FROM posts WHERE title='$titles'");
	if (!$user_details_query) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
	$user_array = mysqli_fetch_array($user_details_query);
	$address = $user_array['venue'];
	$address = str_replace(" ", "+", $address);
	?>

		

		<?php

	//$num_friends = (substr_count($user_array['friend_array'], ",")) - 1;
}

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			padding-top: 0px;
		}


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

.editbt {
	background-color: #0052cc;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  border-radius: 12px;

}

.:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

	</style>
	<title></title>



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="icon" type="image/jpg" href="fiesta.jpg"  />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=DM+Serif+Display&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
     <title>FIESTA</title>
    <link rel="icon" type="image/jpg" href="C:\Users\HP\Desktop\first\fiesta.jpg"  />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script text="text/javascript">
		$(document).ready(function(){
  $("button").click(function(){
    $.ajax({url: "comments.php", success: function(result){
      $("#comments").html(result);
    }});
  });
});
		/*$(document).ready(function(){
  $("button").click(function(){
    $.ajax({url: "demo_test.txt", success: function(result){
      $("#div1").html(result);
    }});
  });
});*/
	</script>
			
</head>
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
        <div class="right ">
        	
			<div id="tagline">
			<a href="createevents.php" style="padding-right:100px;text-decoration:none;">Create Event</a>
    		<a href="includes/handlers/logout.php" style="text-decoration:none">Logout</a>
			</div>
			
</div>
          
        </div>
      </div>
   

<div class="eventdetail">
	<br>
	<br>
	<br>
	<br>
	<br>
			<div class="heroimg"><img src="<?php echo $user_array['image']?>" style="width: 90%;height: 400px;padding-left:10%;
			"></div>
		
		<div class="event">
			<div class="title" style="font-family: 'Lobster', Georgia, Times, serif;font-size: 50px;
 line-height: 100px;color: #0052cc;padding-left:45%"><?php 
			echo $user_array['title']; 

			 ?></div>
			 <span class="date" style="display: inline-block;font-family: 'DM Serif Display', serif;font-size: 25px;
 color: #0052cc;padding-left:20%"><i class="fa fa-calendar" style="font-size:25px"></i>
							<?php echo $user_array['edate']; ?></span>
							
			 <div class="orgainser" style="font-family: 'DM Serif Display', serif;font-size: 25px;
 color: #0052cc;padding-left:20%">Orgained by:&nbsp;<?php echo $user_array['host']; ?></div> 
 
			 <div class="category" style="font-family: 'DM Serif Display', serif;font-size: 25px;
 color: #0052cc;padding-left:20%"><?php echo $user_array['category']; ?></div> 


			<form action="Event.php" method="POST">
				<div style="padding-left:60%">
				<button name="submit" class="editbt">register</button>
</div>	
			</form>	

			<hr>
			<div class="map" style="float: right;margin-right: 20px;padding-right:20%; " >
				<iframe width="200%" height="500px" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed" ></iframe>
			</div>

			<div class="intro" style="font-family: 'DM Serif Display', serif;font-size: 25px;
 color: #0052cc;padding-left:20%"><?php echo $user_array['intro']; ?></div>
			
			
			<div class="description" style="font-family: 'DM Serif Display', serif;font-size: 25px;
 color: #0052cc;padding-left:20%"><?php echo $user_array['description']; ?></div>

			<div class="cost" style="font-family: 'DM Serif Display', serif;font-size: 25px;
 color: #0052cc;padding-left:20%">
				<?php 
					$cost=$user_array['description']; 
					if($cost=="Free")
					{
						echo "Free";
					}
					else
					{
						echo "Price"." ".$user_array['price'];
					}
				?>
			</div>
			<div class="address" style="font-family: 'DM Serif Display', serif;font-size: 25px;
 color: #0052cc;padding-left:20%">
				<?php echo $user_array['venue'].",".$user_array['sector']."<br>".$user_array['pin']; ?>
			</div>

			          	
		</div>












	
	
	<?php

	if(isset($_POST['submit']))
	{
		$mail=$user['email'];
	

	$to=$mail;
	$subject="Register";
	$message="you have regsiterd for event ";
	$headers="piyushjha65@gmail.com";

	if (mail($to,$subject,$message,$headers)) {
		# code...
		echo"you have registered";
		header("Location: index.php");

	}
	 else
	 {
	 	echo"Failure";
	 }

	}
	
	?> 
	</div>  
      </div>
	   
  
	
	 

    <script src="login.js"></script>     
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>