
<?php
include 'db.php';

session_start();
if(isset($_SESSION['email'])){

    $logmssg = $_SESSION['email'];
    $msg4 = "<a href='logout.php'></a>";
}else{


}   ?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>Reviews4Students</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="CSS/style2.css" rel="stylesheet" type="text/css">
    <script src="javascript/scripts.js"></script>
    <script src="javascript/jquery-3.3.1.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0RylKM2JHep-8NBJmAwc8bUVraU4RRIE&callback=initMap"></script>
    <script src="javascript/scripts.js"></script>

  </head>


  <body>
    <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
    <div class="header">
      <a href="index.php">
        <img src="CSS/name.png" alt = "title">
        </a>

    <nav class="clearfix">
  	<ul class="clearfix">
      <li><a href="viewreviews.php">View Reviews</a><li>
    <li><a href="newsfeed.php">News</a><li>
      <li><a href="contact.php">Contact</a><li>
    <li><a href="postrev.php">Post Review</a><li>
  	</ul>
  	<a href="#" id="pull">Menu</a>
  </nav>


  <div class="regbutton">
  <h5><a href="register.php">REGISTER</h5></a>
  <div class="logbutton">


  <?php if(isset($msg4)) { ?> <h5><a href="logout.php" class="logsoutbutton">LOG OUT</a><h5> <?php echo $msg4; ?>

  </div>


  <?php } ?>
  </div>
</div>
  <a href="https://twitter.com/Reviews4Student?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Reviews4Student</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <div class="fb-like" data-href="https://www.facebook.com/Reviews4Students-382965942181210/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div>


    <div class="containermessage">



    <h3>Copyright (c) 2018 Copyright Holder All Rights Reserved.!</h3>



    </div>





    <footer>
    	<ul>
        <li><a href="login.php">login</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="legal.php">legal disclaimer</li>


    </ul>

    </footer>



  </body>


  </html>
