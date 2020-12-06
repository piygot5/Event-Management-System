<?php 
include('includes/header.php');




if(isset($_POST['post'])){
	$title=$_POST['etitle'];
	$host=$_POST['ehost'];
	$edate=$_POST['edate'];
	$ldate=$_POST['ldate'];
	$intro=$_POST['intro'];
	$description= nl2br($_POST['description']);
	$category=$_POST['category'];
	$cost=$_POST['cost'];
	$price=$_POST['price'];
	$venue=$_POST['venue'];
	$city=$_POST['city'];
	$sector=$_POST['sector'];
	$zip=$_POST['zip'];

	$uploadOk = 1;
	$imageName = $_FILES['fileToUpload']['name'];
	$errorMessage = "";

	if($imageName != "") {
		$targetDir = "assets/images/posts/";
		$imageName = $targetDir . uniqid() . basename($imageName);
		$imageFileType = pathinfo($imageName, PATHINFO_EXTENSION);

		/*if($_FILES['fileToUpload']['size'] > 10000000) {
			$errorMessage = "Sorry your file is too large";
			$uploadOk = 0;
		}

		if(strtolower($imageFileType) != "jpeg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpg") {
			$errorMessage = "Sorry, only jpeg, jpg and png files are allowed";
			$uploadOk = 0;
		}*/

		if($uploadOk) {
			if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $imageName)) {
				//image uploaded okay
			}
			else {
				//image did not upload
				$uploadOk = 0;
			}
		}

	}




	if($uploadOk) {
		

		//query = mysqli_query($con, "INSERT INTO posts VALUES ('', '$imageName')");

			$post = new Post($con, $userLoggedIn);
			$post->submitPost($title,$host,$imageName,$edate,$ldate,$intro,$description,$category,$cost,$price,$venue,$city,$sector,$zip,$userLoggedIn);
    
		
	}
	else {
		echo "<div style='text-align:center;' class='alert alert-danger'>
				errorMessage
			</div>";
	}

}



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>

 	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    	body
    	{
    		color: #007bff;
        background: url(https://gfycat.com/openwhimsicalamericanpainthorse);
    	}
    	
    	form
    	{
    		margin-left: 10px;
    		
    		float: right;
		    width: 75%;
		    margin-top: 120px;
		    margin-right: 10px;
    	}
      label
      {
        display: inline-block;
        margin-bottom: .5rem;
        font-family: cursive;
        font-size: large;
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
    </style>
    <script>
$(document).ready(function(){
  $("button").click(function(){
    $.get("comments.txt", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
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
        <div class="right">
        <div id="tagline">
        <a href="index.php" style="padding-right:100px;text-decoration:none">Back to Home</a>
        <a href="includes/handlers/logout.php" style="text-decoration:none">Logout</a>
        </div>
          
        </div>
      </div>
      
   

 	<form action="createevents.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Event title</label>
      <input type="text" class="form-control" id="inputtitle" placeholder="Title" name="etitle">
    </div>
     <div class="form-group col-md-6">
      <label for="inputEmail4">Event Organiser</label>
      <input type="text" class="form-control" id="inputcom" placeholder="Event Hosting Company/College" name="ehost">
    </div>

    <div class="col-md-6">Main Image<br>
      <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
  




    <div class="form-group col-md-6">
      <label for="inputedate">Event date</label>
      <input type="date" class="form-control" id="inputedate" placeholder="Date of Event" name="edate">
    </div><div class="form-group col-md-6">
      <label for="inputPassword4">Last date for registration</label>
      <input type="date" class="form-control" id="inputldate" placeholder="Last datet" name="ldate">
    </div>
  </div>


  <div class="form-group">
    <label for="inputAddress">Event Introduction</label>
    <input type="text" class="form-control" id="inputIntro" placeholder="Event Introduction" name="intro">
  </div>
  <div class="form-group">
      <label for="comment">Event description</label>
      <textarea class="form-control" rows="10" id="description" name="description"></textarea>
    </div>
  	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Category</label>
      <select id="inputState" class="form-control" name="category">
        <option selected>Technology</option>
        <option selected>Cultural</option>
        <option selected>Business</option>
        <option selected>Music</option>
        
      </select>
    </div>
	</div>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Category</label>
      <select id="inputState" class="form-control" name="cost">
        <option selected>Paid</option>
        <option selected>Free</option>   
        
      </select>
    </div>
     <div class="form-group col-md-2">
      <label for="inputprice" value="0">Price</label>
      <input type="number" class="form-control" id="input" name="price">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputCity">Venue</label>
      <input type="text" class="form-control" id="inputvenue" name="venue">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="input" name="city">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-2">
      <label for="inputsector">Sector</label>
      <input type="text" class="form-control" id="input" name="sector">
    </div>
  
  <div class="form-group col-md-2">
      <label for="inputzip">Pin</label>
      <input type="text" class="form-control" id="input" name="zip">
    </div>
  </div>
  
  </div>
  


    
    <input type="submit" value="Create Event" name="post"  class="btn btn-primary">
    <input type="reset" value="Reset" name="post"  class="btn btn-success">

    <h1 onclick="this.innerHTML = 'Your event has succesfully been created'">confirm by mail</h1>
</form>


<script src="login.js"></script>  

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 </body>
 </html>


 