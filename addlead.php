<?php
session_start();
?>
<?php

$hostname = "localhost:3306";
$username = "stem_site";
$password = "QWer1234!!";
$db = "stem";

$dbconnect = mysqli_connect($hostname,$username,$password,$db);

if($dbconnect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit'])) {
	
  $name= mysqli_real_escape_string($dbconnect,$_POST['name']);
  $phone= mysqli_real_escape_string($dbconnect,$_POST['phone']);
  $email= mysqli_real_escape_string($dbconnect,$_POST['email']);
  $comment= mysqli_real_escape_string($dbconnect,$_POST['comment']);
  
  $sql= "INSERT INTO leads (name, phone, email, comment)
  VALUES ('$name', '$phone', '$email', '$comment')";
 
 	
 if(mysqli_query($dbconnect, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnect);
}
 
    if (!mysqli_query($dbconnect, $sql)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.";
	  $_SESSION['alert'] = "Thank you for your interest";
	  
    }

	echo "end";
$_SESSION["alert"] = "Thanks for your interest";	
mysqli_close($dbconnect);
}

header("Location: http://localhost/git/stemcellscientific/index.php?Alert=Yes");
die();

?>
	
