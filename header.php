<?php
include('admin/controller/controller.php');
$con= new Controller();
?>
<! DOCTYPE html>
<html>
<head>
<title>Home</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">      
    <meta name="description" content="">
    <meta name="author" content="">

  <title>index</title>
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./bootstrap/fonts/font-awesome-animation.min.css">
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/eg.css">
  <link rel="stylesheet" href="./bootstrap/css/forum.css">
  <link rel="stylesheet" typr="text/css" href="./bootstrap/css/login.css">
  <link rel="stylesheet" typr="text/css" href="./bootstrap/css/register.css">

 
  
 
</head>
<body id="page-top" name="page-top" class="active">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="nav-btn btn-dark btn-lg accordion-toggle pull-left btnSocial" title="Follow Us" role="tab" id="social-collapse" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></a>
                    
                    
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <a class="navbar-brand" href="index.php">
                                CAREER GUIDANCE</a>
        <li class="dropdown mega-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses<span class="caret"></span></a>              
        <ul class="dropdown-menu mega-dropdown-menu">
        <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Some Colleges</li>                            
            <div id="menCollection" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                   <div class="item active">
                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                <h4 style="color:black;"><trong>Institute of Engineering, Pulchowk Campus</strong></h4>                                               
                    </div><!-- End Item -->
                <div class="item">
                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                    <h4><strong>Kathmandu University</strong></h4>       
                </div><!-- End Item -->                               
                </div><!-- End Carousel Inner -->
                                              <!-- Controls -->
                    <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
            </div><!-- /.carousel -->
                    <li class="divider"></li>
                    <!-- /.All colleges -->
                    <li><a href="#">View all Colleges <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
        </ul>
        </li>
                    <li class="col-sm-3">
                    <ul>
                    <li class="dropdown-header"><a href="search.php">Search Field</a></li>
                  <?php
                    $result=$con->selectAll('tbl_field');
                    foreach($result as $display){ 
                   ?>
                    <li><a href="<?=$display['field']?>.php"><?=$display['field']?></a></li>
                   <?php } ?>
                    <li class="divider"></li>
                    <li class="dropdown-header"><a href="question.php">Choose Courses</a></li>
                    </ul>
                    </li>
                    
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header"><a href="compare.php">Compare Courses</a></li>                         
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header"><a href="grading.php">Grading Of Nepal</a></li>                         
                        </ul>
                    </li>

            </ul>               
            </li>
                            
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="forum.php">Forum</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sign In/Sign Up <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="signin.php">Sign IN</a></li>
                            <li class="divider"></li>
                            <li><a href="signup.php">Sign Up</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.nav-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
       
        
        <aside id="accordion" class="social text-vertical-center">
            <div class="accordion-social">
                <ul class="panel-collapse collapse in nav nav-stacked" role="tabpanel" aria-labelledby="social-collapse" id="collapseOne">
                    <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                    <li><a href="https://www.plus.google.com" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
                    <li><a href="https://github.com" target="_blank"><i class="fa fa-lg fa-github"></i></a></li>
                    <li><a href="https://linkedin.com" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
                    <li><a href="skype:live"><i class="fa fa-lg fa-skype" target="_blank"></i></a></li>
                    <li><a href="http://stackexchange.com" target="_blank"><i class="fa fa-lg fa-stack-exchange"></i></a></li>
                </ul>
            </div>
        </aside>

        <br><br><br>
<div class="container-fluid">
                    <div class="row">
                      <div class="col-md-10">



        

