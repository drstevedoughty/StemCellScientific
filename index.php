<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stem Cell Scientific</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript"> 
  
   
</script>
</head>
  <body style="background:linear-gradient(15deg, white,BEIGE); max-width:950px" font="face:Calibri">

<?php include 'header.php';?>

<?php if (isset($_SESSION['alert']))
{  echo "<div id=\"myAlert\" display=\"none\" class=\"alert alert-success alert-dismissible\" role=\"alert\">";
  echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
  echo "Thanks for reaching out.  We will contact you soon!";
  echo "</div>";  
  unset($_SESSION['alert']);
} 
?>
  


   
	<div class="container-fluid">
    <div class="row">
      <div class="col-sm-2" ></div>
	  <div class="col-sm-8" style="text-align:center" >
	  <H2>Get Your Life Back</H2>
	  <h4>Get out of pain without drugs or surgery</h4>
      <h4>Overcome debilitating illness </h4>
</div>
	  <div class="col-sm-4" ></div>
    </div>
    <div class="row">
      <div class="col-sm-2" ></div>
	  <div class="col-sm-8" style="text-align:center" >
	  <iframe  class="video" src="https://www.youtube.com/embed/1ukL59ofysw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	  </div> 
      <div class="col-sm-4" >   
	  </div>
    </div>
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