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
   
   echo "<script> alert('Inserted Successfully. Thank You!');window.location='personaltrainer.php';</script>";
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
    max-width: 1188px;
    margin-left:72px;
}}
@media (min-width: 1200px){
.container {
      max-width: 1366px;
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

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.intro-section, .intro-section .container .row {
    height: 100vh;
min-height: 100px;}
</style>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include ("nav.php")?>
 <div class="intro-section" id="home-section" style="background-color: #ccc;">
      
	<div class="container" id="vd" style=" background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;background-image: url('img/unsplash1.jpg"  data-stellar-background-ratio="0.5" >
  
        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">		
          <span> <h1 style="margin-top: 100x;
   margin-left: -16%;
    font-family: inherit;
    font-size: 62px;
}"></h1>
<h1 style="margin-left: -36%; font-family: inherit;font-size: 30px;"></h1>
</span>   
          </div>
        </div>

      </div>
      </div>

   
      <div class="container6">
      <div class="site-section">
      <!--<div class="container">-->
       
		<div class="row" style="margin-top:-20px;">
          <div class="col-lg-8 mb-4 col-md-6" style="border: 0px solid red;">
         <div>
            <h1 style="font-size:30px;margin-top:38px">YOUR BODY & YOUR FITNESS REQUIREMENTS ARE UNIQUE.
YOUR PERSONAL TRAINING SHOULD REFLECT THAT!</h1>
<p style="font-weight:400;color:black;margin-top: 33px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our internationally certified gym trainers help accomplish your fitness and weight loss goals, quicker. They aid in guiding you through a balanced combination of cardio, aerobic exercise, strength, and weight training with the help of the latest training techniques, technology, and high-end fitness equipment. Our personal gym trainers help you turn the IMPOSSIBLE to I’M’POSSIBLE.<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our personal trainers customize and personalize gym workouts as per individual needs and requirements. Pair this up with their fully guided nutrition program to attain the best results.<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waves Gym trainers are also accredited with Special Population Training. They are specially trained to cater to a wide variety of audiences. </p>
         </div>
          </div>

		  <div class="col-lg-4 mb-4 col-md-6" style="border: 0px solid black;background-color:#e3e3e3;">
      <form method="post" >

<h4 style="text-align:center;margin-top:30px">Book a Free Session</h4>
<hr>

<input type="text" placeholder="Enter Email" name="email" id="email" required>
<input type="text" placeholder="Enter Mobile no" pattern="[789][0-9]{9}" name="mobno" id="mobno" required>
<hr>
<p style="margin-top:-17px;font-weight:400;color:black">I am interested in "Personal Training" at Fitnex Gym Sangli. Please call me.</p>

<button type="submit"name="submit" class="registerbtn">Send</button>

</form>
           </div>
          </div>

        </div>
        </div>









        <div class="container6">
		
      <div class="site-section">
      <!--<div class="container">-->
       
		<div class="row" style="margin-top:-20%;">
          <div class="col-lg-8 mb-4 col-md-6" style="border: 0px solid red;">
		   
                <h1 style=" font-size:30px"><b>TAKE YOUR FITNESS TO THE NEXT LEVEL WITH OUR CERTIFIED PERSONAL TRAINERS.</b></h1>
                <div>
            <img src="https://wavesgym.com/wp-content/uploads/2022/06/WG-Website-Images.jpg" alt="" style="width:100%;margin-top:52px">
           

         </div>
          </div>

		  <div class="col-lg-4 mb-4 col-md-6" style="margin-top:147px;border: 0px solid black;">
           <div>
           <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238.30840569670062!2d74.1910949!3d17.1246945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc19fe8ba38ebcd%3A0x1db1f02f195fad60!2sSpeed%20fitness%20club%20gym%20kasegon!5e0!3m2!1sen!2sin!4v1679653211990!5m2!1sen!2sin" width="400" height="300" style="border:0;margin-left:0px;margin-top:-16px;height:400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div>
                <img  src="img/freepassimg.jpg" alt="" style="width: 106%;
    margin-top: 25px;">
                    
                </div>
        </div>
        </div>
        </div>
          
		 
        </div>
        </div>
        </div>


        <div class="container6">
      <div class="site-section">
      <!--<div class="container">-->
       
		<div class="row" style="margin-top:5px;margin-left: 45px;">
          <div class="col-lg-12 mb-4 col-md-6" style="border: 0px solid red;">
         <div>
         
         <h5 style="margin-top:-149px">Our certified & experienced personal gym trainers are:</h5>
            <p style="font-weight:400;color:black;margin-top:13px">1. Well-versed with the latest workout programs and equipment<br>
2. Regularized using advanced technology to track your fitness<br>
3. Always onto designing your exercise schedule, according to your individual fitness requirements<br>
4. Consistently upgraded with their fitness knowledge- eg, Kettlebell workshops, CrossFit training, nutrition programs, etc<br>

Join us for a free personal training session and experience the difference at WavesGym.<br>

For further information, please feel free to get in touch with us.</p>




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