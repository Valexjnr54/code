<?php

    session_start();

    if (isset($_POST['submit'])) {
       if (empty($_POST['address']) || empty($_POST['image']) || empty($_POST['phone']) || empty($_POST['git']) || empty($_POST['link']) || empty($_POST['face']) || empty($_POST['gmail']) || empty($_POST['twitter']) || empty($_POST['sk1']) || empty($_POST['sk2']) || empty($_POST['sk3'])) {
           # code...
       } else {
           # code...
       }
       
    }
    

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Victor's Agency || Official Website</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span><i class="md md-album"></i>Victor's Agency</span></a>
                       
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <form role="search" class="navbar-left app-search pull-right hidden-xs">
                                 <input type="text" placeholder="Search..." class="form-control">
                                 <a href=""><i class="fa fa-search"></i></a>
                            </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                               
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="" alt="img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.php"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                        <li class="divider"></li>
                                        <li><a href="../logout.php"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                            <li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="ti-home"></i> <span> Home </span> <span class="menu-arrow"></span></a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="profile.php" class="waves-effect"><i class="ti-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-briefcase"></i> <span> Project </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Upload Project</a></li>
                                    <li><a href="#">View Project</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i> <span> Settings </span> </a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="page-title">Hi <?php 

                                        if(isset($_SESSION['username'])){
                                            echo $_SESSION['username'];
                                        }
                                ?></h2>
                                <h4 class="page-title">Please Fill Your Curriculum Vitae (CV)</h4>
                            </div>
                        </div>

                        <!-------- page content-------->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <form class="form-horizontal m-t-20" action="" method="POST">
                     <div class="row">
                        <label class="col-md-0 control-label">Personal Information</label><br><br>      
                        <div class="form-group ">
                            <div class="col-xs-9">
                                <input class="form-control" type="text" required="" placeholder="Address" name="address">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-3">
                                <input type="file" name="image" class="img-circle" />
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-3">
                                <input class="form-control" type="text" required="" placeholder="Phone Number" name="phone">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label class="col-sm-0 control-label">Bio</label><textarea required class="form-control" placeholder="Brief Detail About You" name="about"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-0 control-label">Social Media</label><br><br>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                <input type="text" name="git" placeholder="Enter Your Github Account" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                    <input type="text" name="link" placeholder="Enter Your Likedin Account" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                    <input type="text" name="face" placeholder="Enter Your Facebook Account" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                    <input type="text" name="gmail" placeholder="Enter Your Gmail Account" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                    <input type="text" name="twitter" placeholder="Enter Your Twitter Account" required="" class="form-control">
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <label class="col-md-0 control-label">Programming Skills</label><br><br>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                <input type="text" name="sk1" placeholder="Enter Your Skill" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                    <input type="text" name="sk2" placeholder="Enter Your Skill" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                    <input type="text" name="sk3" placeholder="Enter Your Skill" required="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-0 control-label">Experience</label><br><br>
                            <div class="col-xs-6">
                                <textarea required class="form-control"></textarea>
                            </div>
                              <div class="form-group ">
                                <div class="col-xs-6">
                                </div>
                                 <div class="col-sm-2">
                                                        <select class="form-control" name="exp1">
                                                            <option  name="exp1[]" value="1990">1990</option>
                                                            <option  name="exp1[]" value="1991">1991</option>
                                                            <option  name="exp1[]" value="1992">1992</option>
                                                            <option  name="exp1[]" value="1993">1993</option>
                                                            <option  name="exp1[]" value="1994">1994</option>
                                                            <option  name="exp1[]" value="1995">1995</option>
                                                            <option  name="exp1[]" value="1996">1996</option>
                                                            <option  name="exp1[]" value="1997">1997</option>
                                                            <option  name="exp1[]" value="1998">1998</option>
                                                            <option  name="exp1[]" value="1999">1999</option>
                                                            <option  name="exp1[]" value="2000">2000</option>
                                                            <option  name="exp1[]" value="2001">2001</option>
                                                            <option  name="exp1[]" value="2002">2002</option>
                                                            <option  name="exp1[]" value="2003">2003</option>
                                                            <option  name="exp1[]" value="2004">2004</option>
                                                            <option  name="exp1[]" value="2005">2005</option>
                                                            <option  name="exp1[]" value="2006">2006</option>
                                                            <option  name="exp1[]" value="2007">2007</option>
                                                            <option  name="exp1[]" value="2008">2008</option>
                                                            <option  name="exp1[]" value="2009">2009</option>
                                                            <option  name="exp1[]" value="2010">2010</option>
                                                            <option  name="exp1[]" value="2011">2011</option>
                                                            <option  name="exp1[]" value="2012">2012</option>
                                                            <option  name="exp1[]" value="2013">2013</option>
                                                            <option  name="exp1[]" value="2014">2014</option>
                                                            <option  name="exp1[]" value="2015">2015</option>
                                                            <option  name="exp1[]" value="2016">2016</option>
                                                            <option  name="exp1[]" value="2017">2017</option>
                                                            <option  name="exp1[]" value="2018">2018</option>
                                                        </select>

                                                    </div>

                                                
                                                        <span class="md-off"></span>
                                                    

                                                    <div class="col-sm-2">
                                                        <select class="form-control" name="exp2">
                                                            <option  name="exp2[]" value="2019">2019</option>
                                                            <option  name="exp2[]" value="2018">2018</option>
                                                            <option  name="exp2[]" value="2017">2017</option>
                                                            <option  name="exp2[]" value="2016">2016</option>
                                                            <option  name="exp2[]" value="2015">2015</option>
                                                            <option  name="exp2[]" value="2014">2014</option>
                                                            <option  name="exp2[]" value="2013">2013</option>
                                                            <option  name="exp2[]" value="2012">2012</option>
                                                            <option  name="exp2[]" value="2011">2011</option>
                                                            <option  name="exp2[]" value="2010">2010</option>
                                                            <option  name="exp2[]" value="2009">2009</option>
                                                            <option  name="exp2[]" value="2008">2008</option>
                                                            <option  name="exp2[]" value="2007">2007</option>
                                                            <option  name="exp2[]" value="2006">2006</option>
                                                            <option  name="exp2[]" value="2005">2005</option>
                                                            <option  name="exp2[]" value="2004">2004</option>
                                                            <option  name="exp2[]" value="2003">2003</option>
                                                            <option  name="exp2[]" value="2002">2002</option>
                                                            <option  name="exp2[]" value="2001">2001</option>
                                                            <option  name="exp2[]" value="2000">2000</option>
                                                            <option  name="exp2[]" value="1999">1999</option>
                                                            <option  name="exp2[]" value="1998">1998</option>
                                                            <option  name="exp2[]" value="1997">1997</option>
                                                            <option  name="exp2[]" value="1996">1996</option>
                                                            <option  name="exp2[]" value="1995">1995</option>
                                                            <option  name="exp2[]" value="1994">1994</option>
                                                            <option  name="exp2[]" value="1993">1993</option>
                                                            <option  name="exp2[]" value="1992">1992</option>
                                                            <option  name="exp2[]" value="1991">1991</option>
                                                            <option  name="exp2[]" value="1990">1990</option>
                                                        </select>
                                                    </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-0 control-label">Project</label><br><br>
                            <div class="col-xs-6">
                                <textarea required class="form-control"></textarea>
                            </div>
                              <div class="form-group ">
                                <div class="col-xs-6">
                                </div>
                                 <div class="col-sm-2">
                                                        <select class="form-control" name="pro1">
                                                            <option name="pro1[]" value="1990">1990</option>
                                                            <option name="pro1[]"  value="1991">1991</option>
                                                            <option name="pro1[]"  value="1992">1992</option>
                                                            <option name="pro1[]"  value="1993">1993</option>
                                                            <option name="pro1[]"  value="1994">1994</option>
                                                            <option name="pro1[]"  value="1995">1995</option>
                                                            <option name="pro1[]"  value="1996">1996</option>
                                                            <option name="pro1[]"  value="1997">1997</option>
                                                            <option name="pro1[]"  value="1998">1998</option>
                                                            <option name="pro1[]"  value="1999">1999</option>
                                                            <option name="pro1[]"  value="2000">2000</option>
                                                            <option name="pro1[]"  value="2001">2001</option>
                                                            <option name="pro1[]"  value="2002">2002</option>
                                                            <option name="pro1[]"  value="2003">2003</option>
                                                            <option name="pro1[]"  value="2004">2004</option>
                                                            <option name="pro1[]"  value="2005">2005</option>
                                                            <option name="pro1[]"  value="2006">2006</option>
                                                            <option name="pro1[]"  value="2007">2007</option>
                                                            <option name="pro1[]"  value="2008">2008</option>
                                                            <option name="pro1[]"  value="2009">2009</option>
                                                            <option name="pro1[]"  value="2010">2010</option>
                                                            <option name="pro1[]"  value="2011">2011</option>
                                                            <option name="pro1[]"  value="2012">2012</option>
                                                            <option name="pro1[]"  value="2013">2013</option>
                                                            <option name="pro1[]"  value="2014">2014</option>
                                                            <option name="pro1[]"  value="2015">2015</option>
                                                            <option name="pro1[]"  value="2016">2016</option>
                                                            <option name="pro1[]"  value="2017">2017</option>
                                                            <option name="pro1[]"  value="2018">2018</option>
                                                        </select>

                                                    </div>

                                                
                                                        <span class="md-off"></span>
                                                    

                                                    <div class="col-sm-2">
                                                        <select class="form-control" name="pro2">
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                        </select>
                                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-0 control-label">Education</label><br><br>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                <input type="text" name="prim" placeholder="Enter Your Primary School" required="" class="form-control"></div>
                                 <div class="col-sm-2">
                                                        <select class="form-control" name="priyr1">
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                        </select>

                                                    </div>

                                                
                                                        <span class="md-off"></span>
                                                    

                                                    <div class="col-sm-2">
                                                        <select class="form-control" name="priyr2">
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                        </select>
                                                    </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-xs-6">
                                    <input type="text" name="sec" placeholder="Enter Your Secondary School" required="" class="form-control ">
                                </div>
                                <div class="col-sm-2">
                                                        <select class="form-control" name="secyr1">
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                        </select>

                                                    </div>

                                                
                                                        <span class="md-off"></span>
                                                    

                                                    <div class="col-sm-2">
                                                        <select class="form-control" name="secyr2">
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                        </select>
                                                    </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-6">
                                    <input type="text" name="uni" placeholder="Enter Your Teritary Institution" required="" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                                        <select class="form-control" name="uniyr1">
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                        </select>

                                                    </div>

                                                
                                                        <span class="md-off"></span>
                                                    

                                                    <div class="col-sm-2">
                                                        <select class="form-control" name="uniyr2">
                                                            <option value="undergraduate">Undergraduate</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                        </select>
                                                    </div>
                            </div>
                        </div>


                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-3">
                                <button class="btn btn-primary btn-block btn-right text-uppercase waves-effect waves-light" type="submit" name="submit">
                                    Submit
                                </button>
                            </div>
                            <div class="col-xs-3">
                                <button class="btn btn-success btn-block btn-right text-uppercase waves-effect waves-light" type="submit" name="update">
                                    Update
                                </button>
                            </div>
                        </div>

                    </form>
                                    
                                </div>
                            </div>
    
    
    
    </div>

                      


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2016. All rights reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>

        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="assets/pages/jquery.dashboard.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>




    </body>
</html>