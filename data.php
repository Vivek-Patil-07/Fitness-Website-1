<?php
session_start();
require("connection/connect.php");
/*
if(isset($_GET['afid'])){
       $id= mysqli_real_escape_string($connect,$_GET['afid']);
    $sql_delete ="DELETE FROM fb_alumnifeedback WHERE afid={$id}";
    mysqli_query ($connect,$sql_delete) or die (mysql_error ());
        }*/
?>
<!DOCTYPE html>
<html>
    <head>
       
         <style>
	  .table td,th,tr{
      border:1px solid #000
      }
	  .text{
	text-align:center!important;
}
 .vd{
		  text-align:center!important;
		  line-height:7px!important;
	  }
   </style>
   </head>
    <body>
    

<!-- =============================================== main body start here ================================================* -->
<div class="container main_container remove-guater-space-pr-pl">
<div class="col-xs-12 col-md-12 div-two remove-guater-space-pr-pl">
<div class="thumbnail div-two-in remove-guater-space-pr-pl">      
       
     
    <div class=" table table-responsive table-hover">
    <table class="table table-responsive"style="width:90%" align="center" > 
	 <?php 
                $sql = "select * from packages";
                $result = mysqli_query($connect,$sql);
                ?>
  <thead>
  <tr style="background: linear-gradient(to right , #2ebf91,#577FDB);color:#fff">
<th >Sr.No</th>
<th >packid	</th>
<th >titlename</th>
<th >packtype</th>
<th >packduration</th>
<th >packprice</th>
<th >description</th>	


              </tr>
          
  
  
  
    <?php
                $i=1;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr style="background: linear-gradient(to right , #fff,#fff);color:#000">
                <td> <?php echo $i;?> </td>


<td> <?php echo $row["packid"];?> </td>
<td> <?php echo $row["titlename"];?> </td>
<td> <?php echo $row["packtype"];?> </td>
<td> <?php echo $row["packduration"];?> </td>
<td> <?php echo $row["packprice"];?> </td>
<td> <?php echo $row["description"];?> </td>


                <td style="text-align:center"><a href="data.php?packid=<?php echo $row['packid']; ?>" onclick="return confirm('Are you sure you want to delete News?')"><i class="far fa-trash-alt"style="color:red"></i></a>
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
<!-- =============================================== main body end here ================================================ -->  
     </body>
</html>
