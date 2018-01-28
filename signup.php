<div class="bg">
<?php include 'header.php';?>

        
        <div class="col-md-offset-4 col-md-6 top-gap">
          <div class="login-form">
           
              <div class="main-login main-center" id="loginform">
                <div class="login-title text-center">
                  <h4>Register Form</h4>
                </div>
               
              <form class="form-horizontal" method="post" action="#" id="loginItem">
                
                <div class="form-group">
                  <label for="name" class="cols-sm-2 control-label"><strong>Your Name</strong></label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="cols-sm-2 control-label"><strong>Your Email</strong></label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="cols-sm-2 control-label"><strong>Password</strong></label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="username" class="cols-sm-2 control-label"><strong>Address</strong></label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="address" id="address"  placeholder="Enter your Address"/>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="confirm" class="cols-sm-2 control-label"><strong>Phone Number</strong></label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" name="phonenum" id="phonenum"  placeholder="Enter Your Phone Number"/>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="confirm" class="cols-sm-2 control-label"><strong>Level:</strong></label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <form>
                          <div class="checkbox">
                            <label><input type="checkbox" name="level" id="level" value="SEE" >SEE</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" name="level" id="level" value="+2" />+2</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" name="level" id="level" value="diploma" />DIPLOMA</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" name="level" id="level" value="bachelore" />BACHELOR</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" name="level" id="level" value="masters" />MASTERS</label>
                          </div>
                        </form>
                       
                    </div>
                  </div>
                </div>

                <form>
        

                <div class="form-group">
                  <label for="confirm" class="cols-sm-2 control-label"><strong>Profession:</strong></label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <div class="checkbox">
                            <label><input type="checkbox" name="profession" value="student">Student</label></div>
                      <div class="checkbox">
                            <label><input type="checkbox" name="profession" value="others">Others</label></div>
                  </div>
                </div>

                <div class="form-group ">
                  <button type="button" name="submit" value="Submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                </div>
              </form>
          </div>
        </div>
      </div> 
    </form>
<?php include 'footer.php';?>
<?php

if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $data=$_POST;
    $con->insertRow('tbl_register',$data);

}
?>
