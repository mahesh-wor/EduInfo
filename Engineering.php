<?php
include ('header.php');

?>

<iframe src="path-engg.html" height="320" width="700" style="border:none" ></iframe>
	<div class="col-md-3 col-md-offset-1 contentEngg"><br>
	 <?php
      $result=$con->selectone('tbl_course','field','engineering');
      foreach($result as $display){ 
      ?>

	
 <a href="<?=$display['coursename']?>.php"><li><h4><?=$display['coursename']?></h4></li></a>


<?php } ?>
</div>


<?php
 include ('footer.php');
?>