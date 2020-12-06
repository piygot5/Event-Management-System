<?php

class Post {
	private $user_obj;
	private $con;

	public function __construct($con, $user){
		$this->con = $con;
		$this->user_obj = new User($con, $user);
	}

	public function submitPost($title,$host,$imageName,$edate,$ldate,$intro,$body,$category,$cost,$price,$venue,$city,$sector,$zip,$user_to) {
		$body = strip_tags($body); //removes html tags 
		$body = mysqli_real_escape_string($this->con, $body);
		$check_empty = preg_replace('/\s+/', '', $body); //Deltes all spaces 
      
		if($check_empty != "") {


			//Current date and time
			$date_added = date("Y-m-d H:i:s");
			//Get username
			$added_by = $this->user_obj->getUsername();

			

			//insert post 
			$query = mysqli_query($this->con, "INSERT INTO posts VALUES ('', '$title','$host','$imageName','$edate','$ldate','$intro','$body','$category','$cost','$price','$venue','$city','$sector','$zip','$user_to','$date_added')");
			//$query = mysqli_query($this->con, "INSERT INTO posts VALUES('', '$body', '$added_by', '$user_to', '$date_added', 'no', 'no', '0','$imageName')");
			$returned_id = mysqli_insert_id($this->con);

			//Insert notification 

			//Update post count for user 
			$num_posts = $this->user_obj->getNumPosts();
			$num_posts++;
			$update_query = mysqli_query($this->con, "UPDATE users SET num_posts='$num_posts' WHERE username='$user_to'");




			$targetmail= $this->user_obj->getEmail();;

			$to="$targetmail";
			$subject="Response from event";
			$message="You have created event".$title."";
			$headers="piyushjha65@gmail.com";

			if (mail($to,$subject,$message,$headers)) {
				# code...
				echo"success111111111";

			}
			 else
			 {
			 	echo"Failure";
			 }



			



		}
	}





}

?>