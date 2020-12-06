<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>FIESTA</title>
    <link rel="icon" type="image/jpg" href="C:\Users\HP\Desktop\first\fiesta.jpg"  />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Website Contact Form</title>
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "n", _("n").value );
	formdata.append( "e", _("e").value );
	formdata.append( "m", _("m").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "example_parser.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}
</script>
<style >
	body {
	margin: 0;
	background-image: url("contact1.jpg");
}

	form
	{
		margin-top: -7px;
    padding-top: 150px;
   
    padding-left: 105px;
    background-color: transparent;
    width: 70%;
    /* padding-left: 100px; */
    margin: 0 auto;
    /* padding-top: 78%; */
    border-radius: 25px;
    height: 60%;
    padding-bottom: 31px
     color: white;
    }

    input[type=text] {
    	-webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
    border: none;
    border-bottom: 2px solid #00cc3d;
    height: 36px;
    padding-left: 9px;
    width: 50%;
    background:transparent;
    color: white;
    font-family: sans-serif;
    font-size: medium;
}

input[type=text]:focus {
  width: 60%;
   border: none;
    border-bottom: 2px solid #fff;

}
input[type=email] {
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
    border: none;
    border-bottom: 2px solid #00cc3d;
    height: 36px;
    padding-left: 9px;
    width: 50%;
    background:transparent;
    color: white;
    font-family: sans-serif;
    font-size: medium;
}

input[type=email]:focus {
  width: 60%;
   border: none;
    border-bottom: 2px solid #00cc3d;


}

	textarea {
		 -webkit-transition: width 0.4s ease-in-out;
		 transition: width 0.4s ease-in-out;
  
  height: 150px;
  width: 50%;
  padding: 12px 20px;
   padding-left: 9px;
  box-sizing: border-box;
  border: 2px solid  #0052cc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
   border: none;
  border-bottom: 2px solid #00cc3d;
   background: transparent;
    color: white;
    font-family: sans-serif;
    font-size: medium;
}
textarea:focus {
  width: 60%;
   border: none;
    border-bottom: 2px solid #00cc3d;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */}
#mybtn
{
	background-color: green;
}
</style>
</head>
<body>
<header>
	<div class="wrap" style="margin-bottom: 100px">
        <div class="left">
          <span class="fiesta" style="font-size:40px;cursor:pointer;text-align: left" onclick="openNav()">&#9776; FIESTA</span>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Back to Home</a>
            <br>
            <a href="#">What's new? </a>
            <br>
            <a href="#">Any issue? Contact us </a>
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
</header>
<div id="Contact" style="    margin-top: 10px;">
	<form id="my_form" onsubmit="submitForm(); return false;" style="margin-top: 20px;color: white;">
  <p><input type="text" id="n" placeholder="Name" required></p>
  <p><input type="email" id="e" placeholder="Email Address" type="email" required></p>
  <textarea id="m" placeholder="write your message here" rows="10" required></textarea>

  <p><input id="mybtn" type="submit" value="Submit Form" style="background-color: green;color: white;width: 20%;height: 20%; font-size: 20px;"> <span id="status" style="color: white;width: 20%;height: 20%; font-size: 20px;" ></span></p>
</form>

</div>


<script src="login.js"></script>  

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 </body>
</body>



</html>