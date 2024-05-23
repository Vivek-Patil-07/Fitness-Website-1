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
   if (isset($_POST['Submit'])){ 
    $todaydate = date('Y-m-d');
	echo $todaydate;
   $name = mysqli_real_escape_string($connect, $_POST['name']);
   $name = filter($name); 
   $Email = mysqli_real_escape_string($connect, $_POST['Email']);
   $Email = filter($Email); 
   $Mobile = mysqli_real_escape_string($connect, $_POST['Mobile']);
   $Mobile = filter($Mobile);    
   $Description = mysqli_real_escape_string($connect, $_POST['Description']);
   $Description = filter($Description); 
  
   
   
    $stmt = $connect->prepare("INSERT INTO enquiry(appdate,name,Email,Mobile,Description)
    VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss",$todaydate,$name,$Email,$Mobile,$Description);
    $stmt->execute();   
   
   echo "<script> alert('Inserted Successfully. Thank You!');window.location='index.php';</script>";
   }
   ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  
<?php include ("links.php")?>

</head>
<style>
#the{
	    padding: 120px;
}
#headi {
    font-size: 15px!impo;
    text-align: center;
    margin-top: 10px;
    margin-bottom: -27px;
}
.intro-section, .intro-section .container .row {
    height: 100vh;
min-height: 100px;}
#vd{
	background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
	filter: brightness(1.);	  
}
#toptext{
	    font-size: 62px;
    color: #000;
    font-family: fantasy;
	margin:10px;
	    margin-left: 60px;
}
.vss{
	    width: 108%;
    height: 454px;
    margin-left: -14%;
    z-index: 9999px;
}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
    height: 39px;
    vertical-align: text-top;
    margin: 3px 0px 5px 44px;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
font-family: -webkit-body;}

.form-inline button {
  padding: 10px 100px;
  background-color: #FF3F0C;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
  margin-left:179%;
}

.form-inline button:hover {
  background-color: #fff;
  color:#000;
}

#button {
	border-radius: 10%;  background-color: #000; /* Green */
 border-radius: 0%;
    background-color: #000;
    border: none;
    color: white;
    padding: 8px;
    text-align: center;
    text-decoration: none;
    width: 259px;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: 61%;}
p{color:#000;}
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
	margin-top: 0px;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
@media (min-width: 1200px){
.container {
    max-width: 1367px;
}}
</style>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include ("nav.php")?>
  <div class="intro-section" id="home-section" style="background-color: #ccc;">
      
	  <div class="container" id="vd" style="background-image: url('https://cdn.pixabay.com/photo/2016/12/04/22/15/fitness-1882721_960_720.jpg"  data-stellar-background-ratio="0.5" >

        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">		  
          
          </div>
        </div>

      </div>
      </div>

   
    <div class="site-section">
      <!--<div class="container">-->
       
		<div class="row" style="margin-top:-20px;">
          <div class="col-lg-6 mb-4 col-md-6" style="border: 0px solid red;">
            <div>              
              <div  id="v">
			<h1 id="toptext">We’re Here To<br> Help You <br>THRIVE</h1>
                <p style=" font-family: inherit; margin:30px;     margin-left: 66px;font-weight:400 	">After years of personal and professional experience, we founded D’s Dynamic Fitness to help individuals and teams to make their athletic dreams a reality. With our comprehensive guided resources, you’ll unearth renewed confidence and learn tactics to help your body and mind thrive.</p><br>
<button class="button button5" id="button" ><a href="membership.php" style="color:#fff;">Get Started</a></button>             
			 </div>
            </div>
          </div> <div class="col-lg-6 mb-4 col-md-6" style="border: 0px solid red;">
            <div>              
              <div>
			<img   class="vss"src="img/1.png">
              </div>
            </div>
          </div>
          
		 
        </div>
        </div>
		




         <!-- ................Form.............. -->


 
		 <div class="row" style="margin-top:-50px;" >
          <div class="col-lg-12 mb-4 col-md-6"  style=" background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
	filter: brightness(-10.8);
    position: relative; background-image: url('img/bg_2.jpeg');"   >
            <div 	>              
              <div style="margin:20px;     margin-top: -85px;" >
                <h2 style=" text-align: center;font-size: 16px;color:#fff;margin-top: 100px">EXPERIENCE THE FITNESS WAVE AT Sangli'S FRIENDLIEST GYM!<br>
<span style="font-size: 56px;
    -webkit-text-stroke: medium;color:#fff">JOIN FITNEX GYM TODAY</span></h2>
    <div style="margin:30px">
	
	<form class="form-inline" method="post"  action="#">  
  <input type="text"  placeholder="Name" name="name">  
  <input type="text"  placeholder="Email" name="Email">  
  <input type="text"  placeholder="Mobile" name="Mobile">  
  <input type="text"  placeholder="Description" name="Description">......................   
   <input type="Submit" name="Submit" value="Submit"  class="btn btn-primary " style="margin-left:40%; width:15%;     background: radial-gradient(black, transparent);
}">
</form>
</div>
	<p style=" text-align: center;
    font-size: 20px;color:#fff;margin:40px">#19YEARS OF SERVICE TO THE FITNESS & WELNESS COMMUNITY.<br>
#HEREFORYOU #HERETOSTAY</p>
              </div>
            </div>
          </div>
        </div>








        
		<div class="row" style="margin-top:40px">
       
		  <div class="col-lg-6 mb-4 col-md-6" style="border:px solid #edf0f5;">
            <div>              
              <div >
                <img style="-webkit-mask-size: contain;
    -webkit-mask-position: center center;
    -webkit-mask-repeat: no-repeat;
    height: 438px;
    margin-left: 118px;
      box-shadow: 13px 5px 20px #2d2e2e;
    border-radius: 148px 10px 136px 7px;" src="https://wavesgym.com/wp-content/uploads/elementor/thumbs/WavesGym1-prllb1g3r4gd7phsw99uiz7czy7nq2mlh7sir7fif4.jpg">
              </div>
            </div>
          </div>
		  
		    <div class="col-lg-6 mb-4 col-md-6" style="border:px solid #edf0f5;">
            <div>              
              <div>
                <p style=" font-family: sans-serif; margin:10px;     margin-left: 66px; ">YOUR BODY & YOUR FITNESS REQUIREMENTS ARE UNIQUE. YOUR PERSONAL TRAINING SHOULD REFLECT THAT!</p>
<h1 style="font-size: 58px;
    margin-left: 57px;
    font-family: fantasy;
    color: #8b9e9f;">CERTIFIED PERSONAL TRAINERS</h1>
<p style="margin-left: 57px;"><b>Our internationally certified gym trainers help accomplish your fitness and weight loss goals, quicker. They aid in guiding you through a balanced combination of cardio, aerobic exercise, strength, and weight training with the help of the latest training techniques, technology, and high-end fitness equipment. Our personal gym trainers help you turn the IMPOSSIBLE to I’M’POSSIBLE.</b></h2>
            <span style="margin-left:-90px;">  <button class="button button5" id="button" ><a href="personaltrainer.php" style="color:#fff;margin-left:-4px;">Book a PT Session</a></button></span>
			  </div>
            </div>
          </div>
        </div>



<!-- ................Scrolling Image.............. -->
<div class="are" style="margin-top:8%">
        <div class="bgimg"  id="pqr" style="background-image: url('img/bg_2.jpeg');"  data-stellar-background-ratio="0.5">

<div class="container">
  <div class="row align-items-center justify-content-center text-center">
    <div class="col-md-7">
      <h2 class="">Get The Result You Want</h2>
      <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ut quisquam, distinctio illo, debitis repudiandae.</p>
    </div>
  </div>
</div>

</div>
</div>











		








<!-- ................Services.............. -->






          <div class="col-lg-12 mb-4 col-md-6" >
                          
              <div id="services" >
                <p><b>What You Will Get !</b></p>
                <h1 style="margin-top:-15px; font-size:3rem"><b>Services</b></h1>
                <p><b>Make Your Workout Easier And Get Faster Results<b></p>
              </div>
            
          </div>




          <div class="container"> 
		<div class="row"  id="the"  style="margin-top:-140px">
          <div class="col-lg-4 mb-4 col-md-6" style="border:px solid #edf0f5; ">
            <div >              
              <div>
              <center><img src="	https://saultfitness.wpenginepowered.com/wp-content/uploads/2018/06/sault-fitness-pushup.svg" id="pho" style="margin-top:40px"></center>
                <h3 id="headi"> CUSTOMIZED PERSONAL TRAINING</h3>	
                <p id="para">Our workouts and training programs are designed for each individual client. You'll get personal training, made just for you.</p>
              </div>
            </div>
          </div>
          
		  <div class="col-lg-4 mb-4 col-md-6" style="border:px solid #edf0f5;">
            <div>              
              <div >
              <center><img src="https://saultfitness.wpenginepowered.com/wp-content/uploads/2018/06/sault-fitness-sandwich.svg"  id="pho" style="margin-top:40px"></center>
                <h3 id="headi">12 WEEK NUTRITIONAL PLAN</h3>
                <p id="para">No diets. Just honest, simple, and straight-forward nutrition that fuels your body for ultimate health and fitness.</p>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 mb-4 col-md-6" style="border:px solid #edf0f5;">
            <div>              
              <div >
              <center><img src="	https://saultfitness.wpenginepowered.com/wp-content/uploads/2018/06/sault-fitness-gym.svg" id="pho" style="margin-top:40px"></center>
                <h3 id="headi">AT HOME WORKOUTS</h3>
                <p id="para">Keep your results going strong with our easy-to-follow at home routines.</p>
              </div>
            </div>
          </div>
        </div>



        <div class="row" id="the" style="margin-top:-263px">
          <div class="col-lg-4 mb-4 col-md-6" style="border:0px solid #edf0f5;">
            <div>              
              <div>
              <center><img src="	https://saultfitness.wpenginepowered.com/wp-content/uploads/2018/06/sault-fitness-exam.svg" id="pho" style="margin-top:40px"></center>
                <h3 id="headi">MONTHLY PROGRESS REPORT</h3>
                <p id="para">We'll use real data to show you just how far you've come. Monthly progress reports keep you on track and motivated.</p>
              </div>
            </div>
          </div>
          
		  <div class="col-lg-4 mb-4 col-md-6" style="border:px solid #edf0f5;">
            <div>              
              <div>
              <center><img src="https://saultfitness.wpenginepowered.com/wp-content/uploads/2018/06/sault-fitness-breakfast.svg" id="pho" style="margin-top:40px"></center>
                <h3 id="headi">INDIVIDUAL MENU PLANNING</h3>
                <p id="para">With tons of flexibility, our menu planning helps you eat foods that are right for you.</p>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 mb-4 col-md-6" style="border:0px solid #edf0f5;">
            <div>              
              <div >
              <center><img src="https://saultfitness.wpenginepowered.com/wp-content/uploads/2018/06/sault-fitness-fitness.svg" id="pho" style="margin-top:40px"></center>
                <h3 id="headi">100% GUARANTEED RESULTS</h3>
                <p id="para">Attend your personal training sessions. Follow our recommended nutritional plans. You'll see results - guaranteed.</p>
              </div>
            </div>
          </div>
        </div>

</div>
		


		



<!-- ................Fitness experience.............. -->

<div class="col-lg-12 mb-4 col-md-6" >
            <div>              
              <div id="dd">
                <p style="font-weight:300"><b>EXPERIENCED & CERTIFIED PERSONAL TRAINERS<b></p>
                <h1 style="margin-top:-15px; font-size:3rem"><b>THE BEST FITNESS EXPERIENCE</b></h1>
                <p style="font-weight:400">We’re committed to bringing you the best workout experience.</p>
              </div>
            </div>
          </div>






		<div class="container">
		<div class="row" style="margin-top:50px">
    <div class="col-lg-3 mb-4 col-md-6" style="border:1px solid #edf0f5;">
            <div >              
              <div id="pht">
                <center><img src="img/nutrition.jpg" style="margin-top:40px;width:260px;border-radius: 8px 8px 8px 8px;"></center>
                <h6 style="text-align:center">In-house Nutritionist</h6>
              </div>
            </div>
          </div>
          
		  <div class="col-lg-3 mb-4 col-md-6" style="border:1px solid #edf0f5;">
            <div>              
              <div id="pht" >
              <center><img src="https://wavesgym.com/wp-content/uploads/2022/05/WG-Open-7-Days-768x432.jpg" style="margin-top:40px;width:260px;border-radius: 8px 8px 8px 8px;height:187px"></center>
                <h6 style="text-align:center">Open 7 Days A Week.<br>
6 AM to 12 PM</h6>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-3 mb-4 col-md-6" style="border:1px solid #edf0f5;">
            <div>              
              <div id="pht">
              <center><img src="https://transpark.my/wp-content/uploads/2020/03/Valet-Parking-Service.jpg" style="margin-top:40px;width:260px;border-radius: 8px 8px 8px 8px;height:187px"></center>
                <h6 style="text-align:center">Complimentary Valet Parking</h6>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-3 mb-4 col-md-6" style="border:1px solid #edf0f5;">
            <div>              
              <div id="pht">
              <center><img src="https://wavesgym.com/wp-content/uploads/2022/05/WG-Clean-Safe-768x432.jpg" style="margin-top:40px;width:260px;border-radius: 8px 8px 8px 8px;height:187px"></center>
                <h6 style="text-align:center">Clean, Comfortable and Safe</h6>
              </div>
            </div>
          </div>
        </div><span style="margin-left:-275px"><button class="button button5" id="button" ><a href="membership.php" style="color:#fff;">Join Today</a></button></span><hr>
      </div>
  </div>
  
  <?php include ("js.php")?>
  <?php include ("footer.php")?>
  

</body>

</html>