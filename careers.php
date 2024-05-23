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
   $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
   $firstname = filter($firstname); 
   $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
   $lastname = filter($lastname); 
   $email = mysqli_real_escape_string($connect, $_POST['email']);
   $email = filter($email);    
   $mobno = mysqli_real_escape_string($connect, $_POST['mobno']);
   $mobno = filter($mobno); 
     
   $selectoption = mysqli_real_escape_string($connect, $_POST['selectoption']);
   $selectoption = filter($selectoption); 
   
  
   
   
    $stmt = $connect->prepare("INSERT INTO careers(firstname,lastname,email,mobno,selectoption)
    VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$email,$mobno,$selectoption);
    $stmt->execute();   
   
   echo "<script> alert('Inserted Successfully. Thank You!');window.location='careers.php';</script>";
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

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include ("nav.php")?>
 
	  <img style="    width: -webkit-fill-available;" src="https://www.careerguide.com/career/wp-content/uploads/2021/07/man-deadlift-1296x728-header-1024x575.jpg"  data-stellar-background-ratio="0.5" >

        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">		  
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">	<span> <h1 style="margin-top:-244px;margin-left:-47%;font-family:inherit;font-size:55px; color:#fff;"></h1></span>	  
          </div>
        </div>

      </div>
      

   
      <div class="container6">
      <div class="site-section">
      <!--<div class="container">-->
       
		<div class="row" style="margin-top:-20px;">
          <div class="col-lg-8 mb-4 col-md-6" style="border: 0px solid red;">
         <div>
          <h1 style="text-align:center;color:#7e7c7c">Careers</h1>
          <p style="font-weight:400;color:black">When it comes to choosing the right gym for their fitness needs, people don’t look beyond Waves Gym. When it comes to making the right choice for your career, you shouldn’t look too hard either. At Waves Gym, we support a culture of openness, learning and empowering our exercise instructors and front of house staff, to do the best they can.

We are one of Mumbai’s most respected fitness destinations. With a 10,000 Sq Ft space located in the heart of Mumbai Andheri West, Waves Gym is dedicated to making Mumbai fitter and stronger.

At Waves Gym, we constantly strive to better ourselves, and our exercise instructors are an integral part of that process. A culture of inclusiveness and perseverance is what we promise. We push our team to excel at whatever they set out to do and the results are there for all to see. We help our trainers to constantly upgrade themselves with newer and better international certifications. Our support staff too, boasts of regular upgrades and training sessions.

We believe in creating a work environment that mirrors our core values, of hard work, determination, excellence and support. Our management has an open door policy, and your suggestions and queries will always be given a patient listening, and most often will be met with excellent additions and implementation.

So if you see yourself working with a fun, young team, that is determined and poised to make a real splash in the Mumbai fitness scene, please upload your resume in the form below.</p></div>
          </div>

		  <div class="col-lg-4 mb-4 col-md-6" style="border: 0px solid black;">
           <div>
  <form method="post" >
  <div class="container">
    <h4 style="text-align:center">APPLY NOW</h4>
    <hr>
    
    <input type="text" placeholder="First Name" name="firstname" id="firstname" required>
    <input type="text" placeholder="Last Name" name="lastname" id="lastname" required>
    <input type="text" placeholder="Email" name="email" id="email" required>
    <input type="text" placeholder="Mobile no" name="mobno" id="mobno" required>

  <select name="selectoption" id="selectoption" style="width:341px;height:40px;background-color: #e3e3e3;">
    <option  >Select an option</option>
    <option >Customer Care Executive</option>
    <option >Membership Sales Consultant</option>
    <option >Personal Trainer</option>
    <option >Floor Trainer</option>
    <option >Group Exercise Instructor</option>
    <option >Nutritionist/Dietician</option>
  </select>
  <br>





    
    <hr>
    <p style="margin-top:-17px;font-weight:400;color:black">I want to apply for a employment opportunity at Fitnex Gym,Sangli</p>

    <button type="submit" name="submit" class="registerbtn">Submit</button>
  </div>
</form>
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