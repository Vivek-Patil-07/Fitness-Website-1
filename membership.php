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
   if (isset($_POST['Register'])){ 
   $todaydate = date('Y-m-d');
	echo $todaydate;
   $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
   $fullname = filter($fullname); 
   $email = mysqli_real_escape_string($connect, $_POST['email']);
   $email = filter($email); 
   $mobno = mysqli_real_escape_string($connect, $_POST['mobno']);
   $mobno = filter($mobno); 
  
   $state = mysqli_real_escape_string($connect, $_POST['state']);
   $state = filter($state); 
   $city = mysqli_real_escape_string($connect, $_POST['city']);
   $city = filter($city); 
   $address = mysqli_real_escape_string($connect, $_POST['address']);
   $address = filter($address); 
   $height = mysqli_real_escape_string($connect, $_POST['height']);
   $height = filter($height); 
   $weight = mysqli_real_escape_string($connect, $_POST['weight']);
   $weight = filter($weight); 
   $medicalhistory = mysqli_real_escape_string($connect, $_POST['medicalhistory']);
   $medicalhistory = filter($medicalhistory); 
   $packtype = mysqli_real_escape_string($connect, $_POST['packtype']);
   $packtype = filter($packtype); 
   
  
   
    $stmt = $connect->prepare("INSERT INTO userinfo(appdate,fullname,email,mobno,state,city,address,height,weight,medicalhistory,packtype)
    VALUES(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssss",$todaydate,$fullname,$email,$mobno,$state,$city,$address,$height,$weight,$medicalhistory,$packtype);
    $stmt->execute();   
   
   echo "<script> alert('Registered Successfully.Thank You!');window.location='membership.php';</script>";
   }
   ?> 





<!DOCTYPE html>
<html lang="en">

<head>



  <style>
.intro-section, .intro-section .container .row {
    height: 100vh;
    min-height: 100px!important;
}
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
	margin-top:65px;
       max-width: 1235px;
    margin-left: 57px;
	    box-shadow: 0px 0px 43px 4px;
}}

 
@media (min-width: 1200px){
.container {
    max-width: 1367px;
}}
</style>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include ("nav.php")?>
 <div class="intro-section" id="home-section" style="background-color: #ccc;">
      
	  <div class="container" id="vd" style="background-image: url('https://www.eatthis.com/wp-content/uploads/sites/4/2022/09/man-intense-workout.jpg?quality=82&strip=1"  data-stellar-background-ratio="0.5" >
  
  <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">		
          <span> <h1 style="    margin-top: 100x;
    margin-left: -38%;
    font-family: inherit;
    font-size: 86px;"></h1>
<h1 style="margin-left: -20%; font-family: inherit;font-size: 30px;"></h1>
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
       
		<div class="row" style="    padding-top: 15px; margin:10px;">
          <div class="col-lg-6 mb-4 col-md-6" style="border: 0px solid red;">
         <div>
          <h1 style="font-size:28px;"><b>SERVING THE COMMUNITY FOR #19YEARS FOR THEIR FITNESS AND WELL-BEING.</b></h1><hr>
          <p style="color:black;    text-align: justify;"><span style="margin-left:20%;"></span>Looking for a great gym workout experience? Look no further! Waves Gym is where our internationally certified personal trainers and state-of-the-art equipment come together with brand new facilities. Waves gym offers 5-star amenities and over 150 group fitness classes for building your way to a healthy lifestyle.<br>

          <span style="margin-left:20%;"></span>Our freshly revamped 10,000 Sq. Ft. gym floor offers the best of Life Fitness, Nautilus, Cybex & Matrix bodybuilding, and weight training equipment. Couple this with training sessions in our dedicated personal training studio to have the most enjoyable exercise experience. New showers, steam rooms, changing rooms, digital lockers, juice bar, complimentary towels, valet parking are just a few of the amenities Waves gym offers.<br>

          <span style="margin-left:20%;"></span>Additionally, we offer High-Intensity Interval Training (HIIT) workouts for building strength, stamina, fitness, and flexibility. We have a fully equipped 1500 Sq. Ft. dedicated outdoor CrossFit area. Train in our new CrossFit cage that contains TRX bands, Boxing bags, Monkey bars, Olympic weight lifting platforms, Kettlebell workout, Battle rope workout, Abs workout, and the likes.<br>

        
         <span style="margin-left:20%;"></span> Need further assistance? Fill in our form, and a Waves Gym team member will get in touch soonest. We look forward to hearing from you!</p><br>
         </div>
          </div>
<style>
.container5 {
    max-width: 847px;
    margin-left: -20px;
}

</style>
		  <div class="col-lg-6 mb-4 col-md-6" style="border: 0px solid red;">
        <form method="post"action="#" >
  <div class="container5">
  
  
  
        <h1 style="font-size:30px; text-align:center;">MEMBERSHIP</h1>
    <p style="text-align:center;font-size:16px;color:black"><b>Please fill in this form to create an account.</b></p>
    <hr>


					<div class="row">
                        <div class="col-sm-12">                           
                           <input name="fullname" type="text" placeholder="Name" class="form-control"  />
                        </div>                    
                     </div>

                     
       


				

  <div class="row" style="margin-top:-5px;">
        
                        <div class="col-sm-6">  
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
</div>
               <div class="col-sm-6">  
    <input type="text" placeholder="Enter mobile" pattern="[789][0-9]{9}" name="mobno"  required>
    </div>
    </div>

	<div class="row" style="margin-top:-5px;">
         
                        <div class="col-sm-6">  

    <input type="text" placeholder="Enter State" name="state" id="state" required>
</div>
                        <div class="col-sm-6">  
    <input type="text" placeholder="Enter City" name="city" id="city" required>
</div>
</div>
                  <div class="row" style="margin-top:-5px;">
		

                        <div class="col-sm-6">  
    <input type="text" placeholder="Enter Address" name="address" id="address" required>
</div>
		<div class="col-sm-6">  
    <input type="text" placeholder="Enter Date" name="createdate" id="createdate" required>
</div>
</div>
  <div class="row" style="margin-top:-5px;">
                        <div class="col-sm-6">  
    <input type="text" placeholder="Enter Height" name="height" id="height" required>
</div>
                        <div class="col-sm-6">  
    <input type="text" placeholder="Enter Weight" name="weight" id="weight" required>
</div>
</div>

 <div class="row"  style="margin-top:-5px;">
                        <div class="col-sm-6">  
      <?php
                     $sql = "select packtype from packages";
                     $result = mysqli_query($connect,$sql);
                     ?>
                  <select  style=" background: #f1f1f1; height:60px; " class="form-control" name="packtype"  required>
                     <?php
                        $i=0;?>
                     <?php while($row = mysqli_fetch_array($result)): ?>                     
					 <div class="col-xs-2">
                        <option value="<?php echo $row["packtype"];?>">
                           <?php echo $row["packtype"];?>
                        </option>
                        <?php
                           $i++;
                           ?>
                        <?php endwhile ?>
                  </select>
</div>
                        <div class="col-sm-6">  
    <input type="text" placeholder="Describe your medical history" name="medicalhistory" id="medicalhistory" required>
</div>
</div>
 

<div class="row" style="margin-top:-5px;">
                        <div class="col-sm-12">  
						  
    
</div>
</div>
                        <div class="col-sm-12">  
   
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="Register" class="registerbtn">Register</button>
  
  
  
  </div>
</form>

          </div>
		  
          
		 
        </div>






        








<!---<div class="container7">
        <div class="row" style="margin-top:80px;">
          <div class="col-lg-8 mb-4 col-md-6" style="border: 0px solid black;">
         <div>
          <h1 style="text-align:center"><b>
          START YOUR FITNEX GYM MEMBERSHIP EXPERIENCE TODAY
          </h1></b>
          <img src="https://images.squarespace-cdn.com/content/v1/555b52efe4b027af1138fbc5/1568742818799-DVIETK9W7TCK2BXJAKDF/IMG_5785.PNG?format=1000w" style="width:760px;margin-top: 41px" alt="">
         </div>
          </div>

		  <div class="col-lg-4 mb-4 col-md-6" style="border: 0px solid black;">
           <div>
            <img src="https://s3.amazonaws.com/export.easil.com/b1ef3175-76fe-4517-bd54-32530e9de199/a746fe5a931ab70023.png" alt="" style="width:366px;margin-top:3px;margin-left:20px">
           </div>
          </div>
          
		 
        </div>
        </div>-->
        </div>
		




    






















  </div>
  </div>
  <?php include ("js.php")?>
<?php include ("footer.php")?>
</body>

</html>