<?php
include ('header.php');
?>
<h1 class="text-center">BACHELOR OF NURSING-TRIBHUWAN UNIVERSITY</h1>>
<div class="col-md-offset-2"><br>
 <?php
      $result=$con->selectone('tbl_course','coursename','Bachelor of Nursing (BN) - Tri');
      foreach($result as $display){ 
      ?>

  <h3>Duration:<?=$display['duration']?><br></h3>

  
  <h3>Eligibility:</h3><br><?=$display['eligibility']?><br>
  <h3>Affiliation:</h3><br><?=$display['affiliation']?><br>
  <h3>Scope:</h3><br><?=$display['scope']?><br>
  <h3>User review:</h3><br><?=$display['alumni']?><br>

<?php } ?>
<?php
 $result=$con->selectone('tbl_subject','coursename','Bachelor of Nursing (BN) - Tri');
      foreach($result as $display){ 
      ?>
  <h3>Subject:</h3><br><?=$display['subject']?><br>
<?php } ?>
</div>
<?php
 include ('footer.php');
?>