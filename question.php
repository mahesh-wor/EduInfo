<?php include'header.php'; ?>
    		
<div class="container">
  <div class="col-md-offset-1 col-md-11">
  <h1>Tick Your Interest Related Terms & Let Us Guide You.</h1>
  <h4><p style="color:  red;">Leave blank if the field annoys you.</p></h4>
<br>
<br>


  <script type="text/javascript">
    var agclicks = 0;
    var egclicks = 0;
    var mgclicks = 0;
    var medclicks = 0;
    var filmclicks = 0;
    var itclicks = 0;

    function onagClick() {
        agclicks += 1;
        document.getElementById("agclicks").innerHTML = agclicks;
    };
    function onegClick() {
        egclicks += 1;
        document.getElementById("egclicks").innerHTML = egclicks;
    };
    function onmgClick() {
        mgclicks += 1;
        document.getElementById("mgclicks").innerHTML = mgclicks;
    };
    function onmedClick() {
        medclicks += 1;
        document.getElementById("medclicks").innerHTML = medclicks;
    };
    function onfilmClick() {
        filmclicks += 1;
        document.getElementById("filmclicks").innerHTML = filmclicks;
    };
    function onitClick() {
        itclicks += 1;
        document.getElementById("itclicks").innerHTML = itclicks;
    };

    function checkClick(){
      totclicks=Math.max(medclicks,mgclicks,egclicks,agclicks,itclicks,filmclicks);
      switch (totclicks){
          case medclicks:
              window.location.replace("Medical.php");
              break;
          case mgclicks:
             window.location.replace("#");
              break;
          case medclicks:
              window.location.replace("#");
              break;
          case filmclicks:
              window.location.replace("Film Study.php");
              break;
          case itclicks:
              window.location.replace("IT Industry.php");  
              break;
      }
      
    };

    </script>

  <form>
    <div class="row">
      
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onmgClick()">Accounting</input></h3>
    </div>
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onitClick()">Coding</input></h3>
    </div>
    <div class="col-md-4 checkbox disabled">
     <h3> <input type="checkbox" onClick="onfilmClick()">Photography</input></h3>
    </div>
    </div>


    <div class="row">
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onegClick()">Designing</input></h3>
    </div>
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onmgClick()">Fashion</input></h3>
    </div>
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onmgClick()">Busssiness</input></h3>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onmedClick()">Medical</input></h3>
    </div>
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onmgClick()">Tourism</input></h3>
    </div>
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onmgClick()">Social</label></h3>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onxClick()">Environment</input></h3>
    </div>
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onegClick()">Physics</input></h3>
    </div>
    <div class="col-md-4 checkbox ">
      <h3><input type="checkbox" onClick="onegClick()">Sketching</input></h3>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onmedClick()">Teacher</input></h3>
    </div>
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onmgClick()">Law</input></h3>
    </div>
    <div class="col-md-4 checkbox">
      <h3><input type="checkbox" onClick="onegClick()"></label>Hardware & Software</h3>
    </div>
    </div>

<br>
<br>
  <div class="row">
          <div class="col-md-4">
          </div>
          <button type="button" class="btn btn-primary btn-lg" onclick="checkClick()">Find My Field</button>
  </div>
</form>
</div>
</div>





<?php include'footer.php'; ?>
