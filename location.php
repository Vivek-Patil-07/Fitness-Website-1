<?php
   session_start();
   require("connection/connect.php");
   /*if(empty($_SESSION['USERID']))
        {
           header("location:Login.php");
        }*/
   	?> 
<?php
   function filter($str){
    $str = addslashes($str);
    $str = preg_replace("/<script>|<\/script>/i", "", $str);
    $str = preg_replace("/<|>/i", "", $str);
    $str = str_replace("'","/",$str);
    $str = str_replace("?","/",$str);
    return $str;
   }
   ?>	
   <?php	
   if (isset($_POST['sendmessage'])){ 
   $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
   $firstname = filter($firstname); 
   $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
   $lastname = filter($lastname);   
   $subject = mysqli_real_escape_string($connect, $_POST['subject']);
   $subject = filter($subject);  
   $email = mysqli_real_escape_string($connect, $_POST['email']);
   $email = filter($email); 
   $message = mysqli_real_escape_string($connect, $_POST['message']);
   $message = filter($message); 
  
   
   
    $stmt = $connect->prepare("INSERT INTO contactus(firstname,lastname,subject,email,message)
    VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$subject,$email,$message);
    $stmt->execute();   
   
   echo "<script> alert('Inserted Successfully. Thank You!');window.location='location.php';</script>";
   }
   ?>


<!DOCTYPE html>
<html lang="en">

<head>
  
<?php include ("links.php")?>

</head>
<style>
@media (min-width: 1200px){
.container {
    max-width: 1367px;
}}

@media (min-width: 1200px){
.container9 {
    max-width: 1245px;
    margin-left: 55px;
}}
.intro-section, .intro-section .container .row {
    height: 100vh;
    min-height: 100px!important;
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: #e3e3e3;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 8px;
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
hr.new4 {
  border: 0.5px solid black;
}



</style>

</style>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include ("nav.php")?>


<img  style="    width: -webkit-fill-available; height:600px;" src="https://i.shgcdn.com/1e124b0b-7f01-435a-8812-ddb9c0bbe1bc/-/format/auto/-/preview/3000x3000/-/quality/lighter/"  data-stellar-background-ratio="0.5" >



<div class="container9">
      <div class="site-section">
      <!--<div class="container">-->
		<div class="row" style="margin-top:10px;">
          <div class="col-lg-8 mb-4 col-md-6" style="border: 0px solid red;">
         <div>
            
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238.30840569670062!2d74.1910949!3d17.1246945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc19fe8ba38ebcd%3A0x1db1f02f195fad60!2sSpeed%20fitness%20club%20gym%20kasegon!5e0!3m2!1sen!2sin!4v1679653211990!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>     
           </div>
          </div>



          <div class="col-lg-4 mb-4 col-md-6" style="border: 0px solid red;">
         <div>
         <form method="post" >
  <div class="container5">
  
  
  
        <h1 style="font-size:30px; text-align:center;">CONTACT US</h1>
    <p style="text-align:center;font-size:16px;color:black"><b>Get In Touch.</b></p>
    <hr>
				



  
	<div class="row" style="margin-top:-5px;">
         
         <div class="col-sm-6">  
      
<input type="text" placeholder="First name" name="firstname" id="firstname" required>
</div>
         <div class="col-sm-6">  
<input type="text" placeholder="Last name" name="lastname" id="lastname" required>
</div>
</div>



    <div class="row">
                        <div class="col-sm-12">                           
                           <input name="subject" type="text" placeholder="Subject" class="form-control" />
                        </div>                    
                     </div>
     <div class="row">
                       <div class="col-sm-12">                           
                         <input name="email" type="text" placeholder="Email" class="form-control" />
                      </div>                    
                     </div>
         



<div class="row" style="margin-top:-5px;">
                        <div class="col-sm-12">  
						  <input type="text" placeholder="Write your message here." name="message" id="message" required style="height:125px">
    
</div>
</div>
                        <div class="col-sm-12">  
    <hr>
   

    <button name="sendmessage" type="submit" class="registerbtn">Send Message</button>
  
  
  
  </div>
</form>
         
           </div>
          </div>

		  
          
		 
        </div>
        </div>
        </div>


		





    






















  </div>
  <style>
.footer{
    margin-top:19px;
}
</style>
<div class="containe">
      <div class="footer">
      <!--<div class="container">-->
		<div class="row" style="margin-top:-88px;background-color:#000;height:241px">
          <div class="col-lg-4 mb-4 col-md-6" style="border: 0px solid red;">
         <div><h2 style="margin-left: 116px;margin-top: 36px; color:#fff;">Fitnex Gym</h2>
<p style="    margin-left: 71px;
 color:#fff;">Near ST Bus Stand,<br>
NH4 Highway Road, Kasegaon,<br>
Sangli – 415404
<br>
Phone: +917620152099<br>
Email: vivekpatil2208@gmail.com</p>
        
</div>
</div>

<div class="col-lg-4 mb-4 col-md-6" style="border: 0px solid red;margin-top:54px">
         <div style="text-align:center; color:#fff;"><h3 style=" color:#fff;">SiteMap</h3>
         <h5><a href="#" style="    font-size: 15px;">About Us</a></h5>
         <h5><a href="#"style="    font-size: 15px;">Membership</a></h5>
         <h5><a href="#"style="    font-size: 15px;">Classes</a></h5>
         <h5><a href="#"style="    font-size: 15px;">Career Options</a></h5>
     
</div>
</div>
<div class="col-lg-4 mb-4 col-md-6" style="border: 0px solid red;margin-top:54px">
         <div style="text-align:center;"><h3  style=" color:#fff;">Follow us</h3>
        <img style="    height: 50px;width: 43px;"src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/WhatsApp_icon.png/598px-WhatsApp_icon.png">
        <img style="    height: 40px;width: 73px;"src="https://1000logos.net/wp-content/uploads/2017/02/Facebook-Logosu.png">
        <img style="    height: 42px;width: 42px;"src="https://cdn-icons-png.flaticon.com/512/3670/3670147.png">
</div>
</div>
	  

	  
</div>
</div>
</div>
  <?php include ("js.php")?>
</body>

</html>