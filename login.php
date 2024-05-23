<?php
   session_start();
   require("connection/connect.php");
function filter($str){
  $str =addslashes($str);
  $str =preg_replace("/<script>|<\/script>/i", "", $str);
  $str =preg_replace("/<|>/i", "", $str);
  $str =str_replace("'","/",$str);
  $str =str_replace("?","/",$str);
  return $str;
}

   /*if(empty($_SESSION['USERID']))
        {
           header("location:Login.php");
        }*/
   	?> 
<?php	
   if (isset($_POST['submit'])){ 
         $USERNAME = mysqli_real_escape_string($connect,$_POST['email']);
         $USERNAME = filter($USERNAME);
         $USERNAME = filter_var($USERNAME,FILTER_SANITIZE_STRING);

         $PASSWORD = mysqli_real_escape_string($connect,$_POST['psw']);
         $PASSWORD =  filter($PASSWORD);
         $PASSWORD = filter_var($PASSWORD,FILTER_SANITIZE_STRING);

         $sql ="SELECT * FROM admin WHERE adminname='$USERNAME' and adminpass='$PASSWORD'";
         $result = $connect->query($sql);
         $row = $result->fetch_assoc();

         if($row) {
        
         echo "<script>alert('Login Successfully...'); window.location='adminpanel.php';</script>";
   }
  }
    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("img/loginpage.jpg");

  height: 98vh;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: 1340px;
  position: relative;
  
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin-top: 149px;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: #ffffff78;
  margin-top: 108px;
    margin-right: 123px;
	border: ridge;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
  <div class="container1">
<div class="bg-img">
  <form action="" class="container" method="post">
    <h1>Admin Login</h1><hr><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="submit" class="btn">Login</button>
  </form>
</div>
</div>


</body>
</html>
