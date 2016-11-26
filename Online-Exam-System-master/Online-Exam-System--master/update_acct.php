<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>NETCAMP || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->






</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Test Your Skill</span></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="update_acct.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>
</div>
</div></div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>Netcamp</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
    <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li></ul>
            <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter tag ">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
      </form>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">

<!--home start-->









<html>
<head>
  <title>Login</title>
  <script src="bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

  <div class="container" style="margin: 0 auto; width: 70%">

    <div class="row" style="padding: 20px 20px 20px 20px">
      
      <div class="col-md-7 col-sm-7 col-md-offset-2 col-sm-offset-2">
        <div class="row">
          <div class="col-md-12 col-sm-12">
          
         


        <form method="get" value="update" action="update_action.php">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <span class="pull-right" style="font-size: 15px">
                <!-- <a href="logout.php">Logout</a> -->
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12">
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12">
              
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="panel panel-default">
                  <div class="panel-body">
                    

                      <br>


                      <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" placeholder="User Name" class="form-control" value="<?php if(isset($_SESSION['user'])) echo $_SESSION['user'][0]['name'];?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" placeholder="email" class="form-control" value="<?php if(isset($_SESSION['user'])) echo $_SESSION['user'][0]['name'];?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                          <label>Gender</label>
                          <select name="gender" class="form-control">
                            <option value="M" <?php if(isset($_SESSION['user']) && $_SESSION['user'][0]['gender'] == 'M') echo 'selected';?>>Male</option>
                            <option value="F" <?php if(isset($_SESSION['user']) && $_SESSION['user'][0]['gender'] == 'F') echo 'selected';?>>Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
    

                    
                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                          <label>Mobile Number</label>
                          <input type="text" name="mob" placeholder="Contact No" class="form-control" value="<?php if(isset($_SESSION['user'])) echo $_SESSION['user'][0]['mob'];?>">
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                          <label>College</label>
                          <input type="text" name="college" placeholder="college name" class="form-control" value="<?php if(isset($_SESSION['user'])) echo $_SESSION['user'][0]['mob'];?>">
                        </div>
                      </div>
                    </div>

                  
                  

                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <button class="btn btn-success" type="submit"> Update Account</button>
                      </div>
                    </div>

                  </div>
                </div>
            </div>
          </div>
          
        </form>

      </div>

    </div>

  </div>























































































<!--<span id="countdown" class="timer"></span>
<script>
var seconds = 40;
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval('secondPassed()', 1000);
</script>-->

<!--home closed-->

<!--quiz start-->



</div></div></div></div>
<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="http://www.netcamp.in" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a href="https://www.facebook.com/sunnygkp10" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Sunny Prakash Tiwari</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+917785068889</h4>
    <h4 style="font-family:'typo' ">sunnygkp10@gmail.com</h4>
    <h4 style="font-family:'typo' ">Kamla Nehru Institute Of Technology ,Sultanpur</h4></div></div>
    </p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
   <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
