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
   if (isset($_POST['submit'])){ 
  
   $email = mysqli_real_escape_string($connect, $_POST['email']);
   $email = filter($email); 
   $mobno = mysqli_real_escape_string($connect, $_POST['mobno']);
   $mobno = filter($mobno); 
  
   
    $stmt = $connect->prepare("INSERT INTO booking(email,mobno)
    VALUES(?,?)");
    $stmt->bind_param("ss",$email,$mobno);
    $stmt->execute();   
   
   echo "<script> alert('Inserted Successfully. Thank You!');window.location='nutrition.php';</script>";
   }
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
  
<?php include ("links.php")?>

</head>
<style>
    @media (min-width: 1200px){
.container6 {
    max-width: 1184px;
    margin-left: 84px;
}}
@media (min-width: 1200px){
.container {
    max-width: 1367px;
}}



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
  padding: 6px;
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
  padding: 6px 20px;
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
.intro-section, .intro-section .container .row {
    height: 100vh;
min-height: 100px; }
/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include ("nav.php")?>
 <div class="intro-section" id="home-section" style="background-color: #ccc;">
      
 <div class="container" id="vd" style=" background-position: center;
 background-position: 50% -25px;
 
    background-size: cover;
    background-repeat: no-repeat;
    position: relative; background-image: url('https://images.unsplash.com/photo-1601368225047-133b35e23786?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80"  >



 <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">		
          <span> <h1 style="    margin-top: 100x;
    margin-left: -38%;
    font-family: inherit;
    font-size: 47px;"></h1>
<h1 style="margin-left: -20%; font-family: inherit;font-size: 30px;"></h1>
</span>   
          </div>
        </div>

</div>
</div>
      </div>

   
      <div class="container6">
      <div class="site-section">
      <!--<div class="container">-->
       
		<div class="row" style="margin-top:5px;">
          <div class="col-lg-8 mb-4 col-md-6" style="border: 0px solid red;">
         <div>
            <h1 style="font-weight:bold; font-size:30px;">ONE TO ONE NUTRITION COUNSELING</h1>
        <p style="color:black;font-weight:400;margin-top:px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keto diets, intermittent fasting, Vegan diets, Paleo diets etc etc. Aren’t you tired of these never ending ways to shed the excess? Don’t fret! We at Waves Gym help you understand the fundamental principles of a nutritionally well-balanced diet so that you’re able to achieve long term benefits via imbibing a healthy lifestyle.</p>
        <img src="https://silverlifegym.in/wp-content/uploads/2017/04/shutterstock_270286190-1.jpg" alt="" style="width:768px;margin-top:px">
        
    </div>
          </div>

		  <div class="col-lg-4 mb-4 col-md-6" style="border: 1px solid #fff;height:376px;    background-color: #e3e3e3;">
          <form method="post" >

    <h4 style="text-align:center">Book a Free Session</h4>
    <hr>
    
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <input type="text" placeholder="Enter Mobile no" name="mobno" id="mobno" required>
    <hr>
    <p style="margin-top:-17px;font-weight:400;color:black">I am interested in "Personal Training" at Fitnex Gym Sangli. Please call me.</p>

    <button type="submit" name="submit" class="registerbtn">Send</button>
  
</form>
     <div>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238.30840569670062!2d74.1910949!3d17.1246945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc19fe8ba38ebcd%3A0x1db1f02f195fad60!2sSpeed%20fitness%20club%20gym%20kasegon!5e0!3m2!1sen!2sin!4v1679653211990!5m2!1sen!2sin" width="372" height="205" style="border:0;margin-left:0px;padding-top: 58px;
    height: 254px;x" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
     </div>
          </div>
          
		 
        </div>
        </div>
        </div>


        <div class="container6">
      <div class="site-section">
      <!--<div class="container">-->
       
		<div class="row" style="margin-top:5px;">
          <div class="col-lg-12 mb-4 col-md-6" style="border: 0px solid red;">
         <div>
         <p style="color:black;font-weight:400;margin-top:-150px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We have a remarkable nutritionist who provides one-on-one consultations to suit individual needs. You will be guided towards establishing a tailor-made health plan. This includes a nutrition assessment, choosing meal plans, setting realistic targets, and coupling those with workouts based on your body type. With the help of regular follow-ups, you can achieve your target faster and more effectively. Indulge and pamper yourself at Waves Gym while getting healthier and fitter!<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vanshika Choudhary is our Associate Nutritionist (MSc UK) and founder of her unique brand Rejuvenate which is focused on bringing together a unique amalgamation of Western and Indian traditional diets to achieve quality results. She has abundant experience in dealing with clients of all age groups and ensures the root cause of your health problem is dealt with instead of mere symptomatic treatment!<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Being a fitness enthusiast, she is determined to help people build healthy relationships with their minds and bodies via gut cleansing, hormonal balance, and protein-balanced meals. A master at understanding food, she educates people to eat smart and live a well-balanced life. Nutrition is a holistic approach, and she believes in giving equal importance to physical and mental health. It’s not about your weight; it’s about changing your lifestyle!<br><br>
<b>Areas of expertise:</b><br>
<ul>
<li style="color:black;font-weight:400">Developing a healthy relationship with food<br></li>
<li style="color:black;font-weight:400">Diet, fitness & lifestyle counseling<br></li>
<li style="color:black;font-weight:400">Weight management<br></li>
<li style="color:black;font-weight:400">Fat loss + Muscle Gains<br></li>
<li style="color:black;font-weight:400">Gut Cleansing<br></li>
<li style="color:black;font-weight:400">Nutrition therapy for various health conditions like High-Cholesterol, Diabetes, Thyroid, PCOD, and other hormonal concerns.<br></li>
<li style="color:black;font-weight:400">Knowledgeable and up to date with all the latest trends, fads, myths, etc.</li></ul></p><br> 





     </div>
     </div>
    </div>

     </div>
     </div>

  </div>
  <?php include ("js.php")?>
<?php include ("footer.php")?>
</body>

</html>