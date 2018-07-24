<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stem Cell Scientific</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   
</script>
</head>
  <body style="background:linear-gradient(45deg, #fffff5,#fffff5);" font="face:Calibri">
 
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#4F84C4">
	  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
	     <span class="navbar-toggler-icon"></span>
	  </button>
<div class = "collapse navbar-collapse" id="collapse_target">
	   <ul class="navbar-nav">
 	     <li class="nav-item">
		   <a class="nav-link" href="#">Home</a>
		 </li>
	     <li class="nav-item dropdown">
		   <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Services
		   <span class="caret">
		   </a>
		   <div class="dropdown-menu" aria-labelled-by="dropdown_target">
		   <ul class="navbar-nav">
		     <a class="dropdown-item">Stem Cell</a>			   
		     <a class="dropdown-item">Prolotherapy</a>
			 <a class="dropdown-item">PRP</a>
           </ul>			 
		   </div>  
		 </li>
 	     <li class="nav-item">
		   <a class="nav-link" href="#">Doctor</a>
		 </li>
 	     <li class="nav-item">
		   <a class="nav-link" href="#">Contract</a>
		 </li>
 	     <li class="nav-item">
		   <a class="nav-link" href="#">Research</a>
		 </li>	   	   
	   </ul>
	   </div>
	</nav>
<br>
<div class="container-fluid">                                                            
<!-- Control the column width, and how they should appear on different devices -->      
<div class="row">                                                                     
<div class="col-sm-9" >                                                             
<img src="img/logoz.png"  class="img-fluid" style="max-width:60px">
<img src="img/stemcellscientificz.png"  class="img-fluid" style="max-width:100%"> 
</div>                                                                                
<div class="col-sm-3" align="left" >     
<br>                                        
<button type="button" class="btn btn-danger"><img src="img/whitephone.png" width="20px" class="icon">(435)313-0432</button> 
</div>                                                                                
</div>                                                                                  
</div>         	
	
	
<?php if (isset($_SESSION['alert']))
{  echo "<div id=\"myAlert\" display=\"none\" class=\"alert alert-success alert-dismissible\" role=\"alert\">";
  echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
  echo "Thanks for reaching out.  We will contact you soon!";
  echo "</div>";  
  unset($_SESSION['alert']);
} 
?>
  
<br>

   
	<div class="container-fluid">
    <div class="row">
      <div class="col-sm-2" ></div>
	  <div class="col-sm-8" style="text-align:center" >
	  <H1 style="color:#404040;">Get Your Life Back</H1>

	  <h4>Get out of pain without drugs or surgery</h4>
      <h4>Overcome debilitating illness </h4>
</div>
	  <div class="col-sm-4" ></div>
    </div>
    <div class="row">
      <div class="col-sm-2" ></div>
	  <div class="col-sm-8" style="text-align:center" >
	  
	  <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item video" src="https://www.youtube.com/embed/1ukL59ofysw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	  </div></div> </div>
    
    <!-- Or let Bootstrap automatically handle the layout -->
     <!--    <div class="row">
     <!--      <div class="col-sm" style="background-color:yellow;">25%</div>
     <!--      <div class="col-sm" style="background-color:orange;">25%</div>
     <!--      <div class="col-sm" style="background-color:yellow;">25%</div>
     <!--      <div class="col-sm" style="background-color:orange;">25%</div>
     <!--    </div>
    <br>
    
    <!--     <div class="row">
     <!--      <div class="col" style="background-color:yellow;">25%</div>
     <!--     <!--      <div class="col" style="background-color:orange;">25%</div>
      <!--     <div class="col" style="background-color:yellow;">25%</div>
      <!--     <div class="col" style="background-color:orange;">25%</div>-->

    <br>
    <br>
	    <br>

	 <div class="row">
	   <div class="col-sm-4" >
<img class="img-rounded" width="250px" height="auto" src="img/construction.jpg"> <br>  	   
       </div>

	   <div class="col-sm-7" style="text-align:left">
	   I work in the construction trades, I value supporting my family, and seeing the results of my labor every day.  But join pain was getting so bad I was afraid I would not be able to work.
Stem cell treatments helped me get my life back
</div>
</div>
	<br><br>	
	 <div class="row"><div class="col-sm-4" >
       <img class="img-rounded" width="250px" height="auto" src="img/walkwchild.jpg"><br>  
	 </div><div class="col-sm-7" style="text-align:center">
	 I like visiting my grandchildren, travel, and being active. But joint pain was getting so bad I couldn’t enjoy the people I love most.
Stem cell treatments helped me get my life back
     </div></div>
	 <BR><BR>
	 <div class="row"><div class="col-sm-4" >
       <img class="img-rounded" width="250px" height="auto" src="img/athlete.jpg"><br>  	 
	 </div><div class="col-sm-7">
My daughter was offered sports scholarships from top ranked schools.  Then an injured joint wouldn’t heal and all her dreams seemed at risk.
Stem cell treatments helped my daughter get her life back<BR>	 
     </div></div><br><br>
	
<HR>
	 <div class="row"><div class="col-sm-1" ></div><div class="col-sm-10" style="text-align:center">
Let us show you our innovative, safe, and effective approaches to treating joint pain and other degenerative disease without surgery.<BR>
<BR>
We are glad to help you make an informed decisions with absolutely no obligation.<BR>
So contact us now and discover how you can get your life back.<BR>

     </div></div>
	 <div class="row"><div class="col-sm-2" ></div><div class="col-sm-8">
     <BR>



       </div>	   
	   
    </div>

<br>

  <div class="row">
	<div class="col-sm-4" >
<strong>Reach out to us!</strong><br>
phone: (435)313-0432<br>
text: (435)313-0432<br>
fax: (888)880-8230<br>
email: info@stemellscientific.com
<br>
    </div>
    <div class="col-sm-4" >
<?php include 'leadform.php';?>
   </div>
  </div>
</div>
  </body>
</html>

