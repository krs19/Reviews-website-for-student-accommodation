
<?php
include 'db.php';

session_start();
if(isset($_SESSION['email'])){

    $logmssg = $_SESSION['email'];
    $msg4 = "<a href='logout.php'></a>";
}else{


}

?>
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


<div class="card-group">
<div class="card">
  <img class="card-img-top" src="CSS/merlin.jpg" alt="Merlin Heights">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="merlinheights.php"><h3 class="card-text">Merlin Heights</h3></a>
    <p class="card-text"><small class="text-muted">® Fresh Student Living 2018</small></p>
  </div>
</div>
<div class="card">
  <img class="card-img-top" src="CSS/merlin.jpg" alt="Newarke Point">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="newarke.php"> <h3 class="card-text">Newarke Point</h3></a>
    <p class="card-text"><small class="text-muted">Unite Accomodation 2018</small></p>
  </div>
</div>
<div class="card">
  <img class="card-img-top" src="CSS/merlin.jpg" alt="Lumis">
  <div class="card-body">
    <h5 class="card-title"></h5>
  <a href="lumis.php">  <h3 class="card-text">Lumis</h3></a>
    <p class="card-text"><small class="text-muted">© 2003-2018 CRM Ltd</small></p>
  </div>
</div>
</div>
<div class="card-group">
<div class="card">
  <a href="Grosvenor.php">  <img class="card-img-top" src="CSS/grosvenor.jpg" alt="Grosvenor"></a>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="Grosvenor.php"><h3 class="card-text">Grosvenor House</h3></a>
    <p class="card-text"><small class="text-muted">Westmanor Accomodation 2018</small></p>
  </div>
</div>
<div class="card">
<a href="codeaccom.php">  <img class="card-img-top" src="CSS/merlin.jpg" alt="Code"></a>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="codeaccom.php"> <h3 class="card-text">Code</h3></a>
    <p class="card-text"><small class="text-muted">Code 2018</small></p>
  </div>
</div>
<div class="card">
<a href="summit.php">  <img class="card-img-top" src="CSS/merlin.jpg" alt="The Summit"></a>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="summit.php"> <h3 class="card-text">The Summit</h3></a>
    <p class="card-text"><small class="text-muted">© 2003-2018 CRM Ltd</small></p>
  </div>
</div>
</div>

<div class="card-group">
<div class="card">
<a href="opal.php">  <img class="card-img-top" src="CSS/merlin.jpg" alt="Opal Court"></a>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="opal.php"><h3 class="card-text">Opal Court</h3></a>
    <p class="card-text"><small class="text-muted">® Fresh Student Living 2018</small></p>
  </div>
</div>
<div class="card">
<a href="hub.php">  <img class="card-img-top" src="CSS/merlin.jpg" alt="The Hub"></a>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="hub.php"> <h3 class="card-text">The Hub</h3></a>
    <p class="card-text"><small class="text-muted">Unite Accomodation 2018</small></p>
  </div>
</div>
<div class="card">
  <a href="martins.php">  <img class="card-img-top" src="CSS/merlin.jpg" alt="St.Martins"></a>
  <div class="card-body">
    <h5 class="card-title"></h5>
  <a href="martins.php"> <h3 class="card-text">St.Martins House</h3></a>
    <p class="card-text"><small class="text-muted">© 2003-2018 CRM Ltd</small></p>
  </div>
</div>
</div>

<div class="card-group">
<div class="card">
    <a href="johnfoster.php"><img class="card-img-top" src="CSS/merlin.jpg" alt="John Foster"></a>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="johnfoster.php"><h3 class="card-text">John Foster Hall</h3></a>
    <p class="card-text"><small class="text-muted">® Fresh Student Living 2018</small></p>
  </div>
</div>
<div class="card">
<a href="nixon.php">  <img class="card-img-top" src="CSS/merlin.jpg" alt="Nixon Court"></a>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="nixon.php"> <h3 class="card-text">Nixon Court</h3></a>
    <p class="card-text"><small class="text-muted">Unite Accomodation 2018</small></p>
  </div>
</div>
<div class="card">

  <div class="card-body">

  <a href="contact.php"> <h3 class="card-text">Other accomodations please contact us here</h3></a>

  </div>
</div>
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
