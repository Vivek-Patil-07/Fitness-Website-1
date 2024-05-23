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
   $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
   $firstname = filter($firstname); 
   $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
   $lastname = filter($lastname); 
   $email = mysqli_real_escape_string($connect, $_POST['email']);
   $email = filter($email); 
   $packtype = mysqli_real_escape_string($connect, $_POST['packtype']);
   $packtype = filter($packtype); 
   $mobile = mysqli_real_escape_string($connect, $_POST['mobile']);
   $mobile = filter($mobile); 
    
   
    $stmt = $connect->prepare("INSERT INTO classes(firstname,lastname,email,packtype,mobile)
    VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$email,$packtype,$mobile,);
    $stmt->execute();   
   
   echo "<script> alert('Submited Successfully.Thank You!');window.location='classes.php';</script>";
   }
   ?> 




<!DOCTYPE html>
<html lang="en">

<head>
  
<?php include ("links.php")?>

</head>
<style>
h6{border: ridge;
background-color: wheat;}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
img {
    width: 63%;
    vertical-align: middle;
    margin-top: 32px;
    border-style: none;
}
#abp {
	 box-shadow: 05px 05px 05px 5px #ddd;
    font-size: 19px;
    font-family: revert;
    font-weight: 450;
    border-style: ridge;
    color: black;
    margin-top: 25px;
    margin-bottom: 20px;
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
 .container1 {
 max-width: 1189px;
     margin-left:76px;}
@media (min-width: 1200px){
.container {
    max-width: 1345px;
}}
</style>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include ("nav.php")?>
 <div class="intro-section" id="home-section" style="background-color: #ccc;">
      
 <div class="container" id="vd" style="    background-size: cover;margin-left: 0px;
background-image: url('https://images.unsplash.com/photo-1605296867304-46d5465a13f1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"  data-stellar-background-ratio="0.5" >
  
        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">		
          <!--<span> <h1 style="    margin-top: 100px;
    margin-left: -70%;
    font-family: inherit;
   font-size: 50px;">CLASSES</h1>
<h1 style="margin-left: -68%; font-family: inherit;font-size: 30px;">The best group exercise<br> classes in Sangli</h1> 
</span> --->  
          </div>
        </div>

      </div>
      </div>


<!-- ................Classes.............. --
<div class="col-lg-12 mb-4 col-md-6" >
            <div>              
              <div >
                <h1 id="sdf"><b>Classes</b></h1>
                <p style="font-weight:300;text-align: center;font-size:x-large;color:black">The best group exercise classes in Sangli</p>
              </div>
            </div>
          </div>
<!-- ................Services div.............. -->

	
<style>
.hover01 figure img {
	margin-left: 72px;
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover01 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
	  margin: 15px;
    margin-left: 68px;
    margin-top: 32px;
	   box-shadow: 05px 05px 05px 5px #ddd;
}
.intro-section, .intro-section .container .row {
    height: 100vh;
    min-height: 100%;
}
.button {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 2px 153px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

</style>
   
      <div class="container1">
      <div class="site-section">
      <!--<div class="container">-->
       
		


           <div class="row" style="margin-top:-60px">
    <div class="col-lg-4 mb-4 col-md-6" style="border:0px solid #edf0f5;">
	
                          
              <div id="abp" >
             <div class="hover01 column">
  <div>
    <figure><img  style="width:208px;margin-left: 83px" src="https://e0.pxfuel.com/wallpapers/813/809/desktop-wallpaper-bollywood-dance-high-quality-indian-dance-thumbnail.jpg" /></figure>
 
  </div>
  
          </div>
                <h6 style="text-align:center">BOLLYWOOD DANCE CHOREOGRAPHY </h6>
                <p>Learn Bollywood Dance Today! Bollywood Dance choreography workshops are for</p>
                <center><h6>₹  599 / Month</h6> </center>
                <a id="myBtn" class="button" >Sign Up</a>
              </div>
           
          </div>   <div class="col-lg-4 mb-4 col-md-6" style="border:0px solid #edf0f5;">
	
                          
              <div id="abp" >
             <div class="hover01 column">
  <div>
    <figure><img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZWRoNC3wqY2r9YQA44bwrtNwb-VzuNg5OPaigIPmDzQ&usqp=CAU&ec=48600112" /></figure>
 
  </div>
  
          </div>
                <h6 style="text-align:center">CROSSFIT GROUP TRAINING CLASS</h6>
                <p>Take your workout to the next level with CrossFit Group Training Classes with Pravin</p>
                <center><h6>₹  499 / Month</h6> </center>
                <a  id="myBtn1"  class="button">Sign Up</a>
              </div>
           
          </div>   <div class="col-lg-4 mb-4 col-md-6" style="border:0px solid #edf0f5;">
	
                          
              <div id="abp" >
             <div class="hover01 column">
  <div>
    <figure><img style="width:197px;margin-left: 90px" src="https://images.newindianexpress.com/uploads/user/imagelibrary/2022/5/27/w600X390/1-32-tvm16_2605chn_34.jpg" /></figure>
 
  </div>
  
          </div>
                <h6 style="text-align:center">KICKBOXING</h6>
                <p>Whack them Fitness Struggles and Grow Strong!</p>
                <center><h6>$ 999 / Month</h6> </center>
                <a id="myBtn2"  class="button">Sign Up</a>
              </div>
           
          </div> 
          </div>
          </div>
		  







          <div class="row" style="margin-top:-130px">
   <div class="col-lg-4 mb-4 col-md-6" style="border:0px solid #edf0f5;">
	
                          
              <div id="abp" >
             <div class="hover01 column">
  <div>
    <figure><img style="width:261px;margin-left: 55px" src="https://th-i.thgim.com/public/migration_catalog/article14125275.ece/alternates/FREE_1200/26MP_PEDEALBEAT2" /></figure>
 
  </div>
  
          </div>
                <h6 style="text-align:center">INDOOR CYCLING</h6>
                <p>SWEAT TO A DIFFERENT BEAT</p>
                <center><h6>$ 399 / Month</h6> </center>
                <a id="myBtn3" class="button">Sign Up</a>
              </div>
           
          </div> 
		  <div class="col-lg-4 mb-4 col-md-6" style="border:0px solid #edf0f5;">
	
                          
              <div id="abp" >
             <div class="hover01 column">
  <div>
    <figure><img  src="https://d3oorwrq3wx4ad.cloudfront.net/articles/extra/tryst1544100693.jpg" /></figure>
 
  </div>
  
          </div>
                <h6 style="text-align:center">ZUMBA FITNESS</h6>
                <p>Forget About The Workout, Join The Party!</p>
                <center><h6>$ 499 / Month</h6> </center>
                <a id="myBtn4"  class="button">Sign Up</a>
              </div>
           
          </div> 
		  <div class="col-lg-4 mb-4 col-md-6" style="border:0px solid #edf0f5;">
	
                          
              <div id="abp" >
             <div class="hover01 column">
  <div>
    <figure><img style="width:200px;margin-left: 87px" src="https://www.ukfitness.in/assets/images/power-yoga.jpg" /></figure>
 
  </div>
  
          </div>
                <h6 style="text-align:center">POWER YOGA</h6>
                <p>The holistic way to deal with stress and fitness!</p>
                <center><h6>$ 799 / Month</h6> </center>
                <a id="myBtn5"  class="button">Sign Up</a>
              </div>
           
          </div> 
          </div>
		  
		 
		 






<style>
.close:not(:disabled):not(.disabled) {
    cursor: pointer;
    margin-left: 97%;
}
</style>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width:450px">
    <span class="close">&times;</span>
   <form  method="post" action="#">

  <label for="firstname" style="color:black"><b>First name:</b></label><br>  
  <input type="text" style="width: -webkit-fill-available;" id="firstname" name="firstname" required><br>
  <label for="lastname" style="color:black"><b>Last name:</b></label><br>
  <input type="text" style="width: -webkit-fill-available;" id="lastname" name="lastname" ><br>
  <label for="email" style="color:black"><b>Email:</b></label><br>
  <input type="text" style="width: -webkit-fill-available;" id="email" name="email" ><br>
 <label for="email" style="color:black"><b>Package Type </b></label><br>  
  <?php
                     $sql = "select packtype from packages";
                     $result = mysqli_query($connect,$sql);
                     ?>
                  <select  style="height:40px; " class="form-control" name="packtype"  required>
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
  
  
  
  <label for="mobile" style="color:black"><b>Mobile:</b></label><br>
  <input type="text" style="width: -webkit-fill-available;" pattern="[789][0-9]{9}" id="mobile" name="mobile" ><br><br>
  <input type="submit" name="Submit" style="width: -webkit-fill-available;"value="Submit">
</form>
  </div>

</div>



<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn5");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>







           




        </div>
        </div>
		
      </div>
</div>





    






















  </div>
  <?php include ("js.php")?>
<?php include ("footer.php")?>
</body>

</html>