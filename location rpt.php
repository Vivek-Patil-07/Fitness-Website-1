<?php
   session_start();
   require("connection/connect.php");
if(isset($_GET['contactusid'])){
       $id= mysqli_real_escape_string($connect,$_GET['contactusid']);
    $sql_delete ="DELETE FROM contactus WHERE contactusid={$id}";
    mysqli_query ($connect,$sql_delete) or die (mysql_error ());
        }
		
		?>




<!DOCTYPE html>
<html lang="en">
<head>
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
<h1 style="text-align:left; margin-top:10%; margin-left:07%; font-family: inherit;font-size: 30px;">Contact us</h1>
</span>   
          </div>
        </div>
  
   

      </div>
      </div>


<!-- #region -->
<!-- ................Services div.............. -->


   
<div class=" container2	">
      <div class="site-section" >
      <!--<div class="container">-->
       
		<div class="row" style="    padding-top: 15px; margin:0px;">
      
		  <div class="col-lg-12 mb-4 col-md-6" style="border: 0px solid red;">
      <div class=" table table-responsive table-hover">
    <table class="table table-responsive"style="width:738px; margin-top:10px; " align="center" > 
	 <?php 
                $sql = "select * from contactus";
                $result = mysqli_query($connect,$sql);
                ?>
  <thead>
  <tr style="background: linear-gradient(to right , #2ebf91,#577FDB);color:#fff">
<th >cid</th>
<th >Firstame</th>
<th >Lastname</th>
<th >Subject</th>
<th >Email</th>
<th>Message</th>
<th>Delete</th>



              </tr>
          
  
  
  
    <?php
                $i=1;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr style="background: linear-gradient(to right,#fff,#fff);color:#000">
                <td> <?php echo $i;?> </td>




<td> <?php echo $row["firstname"];?> </td>
<td> <?php echo $row["lastname"];?> </td>
<td> <?php echo $row["subject"];?> </td>
<td> <?php echo $row["email"];?> </td>
<td> <?php echo $row["message"];?> </td>



                <td style="text-align:center"><a href="location rpt.php?contactusid=<?php echo $row['contactusid']; ?>" onclick="return confirm('Are you sure you want to delete this enquery?')">delete 	</a>
                </td>
              </tr>
              <?php
                $i++;
                }
                ?>   
</table>
</div>    	
          </div>
		  
          
		 
        </div>






        







        </div>
		




    






















  </div>
  <?php include ("js.php")?>

</body>

</html>