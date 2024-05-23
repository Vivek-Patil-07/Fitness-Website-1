<?php
   session_start();
   require("connection/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>



  <style>

    body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


</style>





  
<?php include ("links.php")?>

</head>
<style>
.site-section {
    padding: 0em 0;
} 
     @media (min-width: 1200px){
.container7 {
    max-width: 1212px;
    margin-left:-56px;
}}
   @media (min-width: 1200px){
.container5 {
    max-width: 848px;
    margin-left:144px;
}}
 @media (min-width: 1200px){
.container2 {
	margin-top:39px;
       max-width: 1235px;
    margin-left: 57px;
	    box-shadow: 0px 0px 43px 4px;
		    margin-bottom: 32px;
}}

 
@media (min-width: 1200px){
.container {
    max-width: 1367px;
}}

.intro-section, .intro-section .container .row {
    height: 30vh;
    min-height: 100px;
}
</style>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include ("adminnav.php")?>
 <div class="intro-section" id="home-section" style="background-color: #ccc;">
      
	  <div class="container" id="vd" style=" background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative; background-position: 0% 400px; background-image: url('https://t3.ftcdn.net/jpg/04/29/35/62/360_F_429356296_CVQ5LkC6Pl55kUNLqLisVKgTw9vjyif1.jpg"  data-stellar-background-ratio="0.5" >
  
  <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">		
          <span> 
		  <h1>.</h1>
<!--<h1 style="text-align:left; margin-top:10%; margin-left:07%; font-family: inherit;font-size: 30px;">Admin Panel</h1>-->
<a  style="text-align:left; margin-top:10px; margin-left:-55%; font-family: inherit;font-size: 30px;" href="membership rpt.php"> Membership Rpt</a>&nbsp;&nbsp;<b>|</b>&nbsp;
<a  style="text-align:left; margin-left:1%; font-family: inherit;font-size: 30px;" href="DatewiseMembershiprpt.php">Date wise Membership rpt</a>
</span>    
          </div>
        </div>
  
   

      </div>
      </div>


<!-- #region -->
<!-- ................Services div.............. -->


   
<div class="container2">
      <div class="site-section" >
      <!--<div class="container">-->
       
		<div class="row" style="    padding-top: 15px; margin:0px;">
      
		  <div class="col-lg-12 mb-4 col-md-6" style="border: 0px solid red;">
        <form action="" method="post">
  <div class="container5">
  
  
  
        <h1 style="font-size:30px; text-align:center;">Date wise Membership Report </h1>
    <hr>


	<div class="row" style="margin-top:5px;">
	     
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group-inner">
                                                                        <label>From Date</label>
                                                                <input  type="date" name="appdate1" class="form-control"  autocomplete="off" autofocus required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group-inner">
                                                                        <label>To Date</label>
                                                                        <input type="date" name="appdate2" class="form-control"  autocomplete="off" required />
                                                                    </div>
                                                                </div>
                                                                
                                                                </div>
         
                 
                        <div class="col-sm-12">
<button type="submit" name="submit" class="registerbtn" formaction="Datewisemembershiplist.php">Submit</button>
  </div>
</div>
  </div>
</form>
          </div>
        </div>
</div>
		
  </div>
  <?php include ("js.php")?>

</body>

</html>