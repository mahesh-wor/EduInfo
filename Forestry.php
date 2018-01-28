<?php
include ('header.php');

?>
<iframe src="path-bforestry.html" height="500" width="600" style="border:none" ></iframe>	

	<div class="col-md-3 col-md-offset-1 contentEngg"><br>
	 <?php
      $result=$con->selectone('tbl_course','field','forestry');
      foreach($result as $display){ 
      ?>

	
 <a href="<?=$display['coursename']?>.php"><li><h4><?=$display['coursename']?></h4></li></a>


<?php } ?></div>
<div class="col-md-9">
	
</div>




<?php
 include ('footer.php');
?>