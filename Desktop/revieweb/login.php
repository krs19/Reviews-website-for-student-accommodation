<?php

session_start();
if(isset($_SESSION['email'])){

    $logmssg = $_SESSION['email'];
    $msg4 = "<a href='logout.php'></a>";
}else{

}
require 'db.php';


if(isset($_POST ) & !empty($_POST)) {



  $email =mysqli_real_escape_string ($conn, $_POST['email']);
  $salt = "hqufehef07935793110hddh";
  $Password = $_POST['password'].$salt;
  $Password = sha1($Password);

	$check_database_query =  "SELECT * FROM registered_users WHERE Student_email='$email' AND password='$Password'";
  $result = mysqli_query($conn,$check_database_query);
	$check_login_query = mysqli_num_rows($result);

	if($check_login_query == 1) {
    $_SESSION['email'] = $email;
    header('Location:postrev.php');

		}
    else {
      $msg = "invalid username or password";
    }

    if (!isset($_SESSION['email'])) {
      $msg = "invalid username or password";

    }

    else {

        $msg2 = "Already Logged in";

    }
}
?>

<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>Reviews4Students</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="CSS/style2.css" rel="stylesheet" type="text/css">
    <script src="javascript/jquery-3.3.1.min.js"></script>
    <script src="javascript/scripts.js"></script>
  </head>


  <body>


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

<a href="https://twitter.com/Reviews4Student?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Reviews4Student</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<div class="fb-like" data-href="https://www.facebook.com/Reviews4Students-382965942181210/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div>


<body>

  <div class="logwrap">


      <form class="form-signin" method ="POST">
        <h2 class="form-signin-heading">Please Login First</h2>
        <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="">
        <input type="password" class="form-control" name="password" placeholder="Password" required=""  ondragover="">
        <label class="checkbox">
          <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
      <a href="register.php">  <label class ="regme">
      No account?Register now!
    </label></a>
        <button class="loginbutton" type="submit" value="login">Login</button>

        <?php if(isset($msg)) { ?> <div class="wrongpass" role="alert"> <?php echo $msg; ?>

        </div>
                  <?php } ?>


        <?php if(isset($msg2)) { ?> <div class="notagain" role="alert"> <?php echo $msg2; ?>


        </div>

              <?php } ?>
      </form>


</div>
    </div>





</body>


    <footer>
    	<ul>
        <li><a href="login.php">login</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="legal.php">legal disclaimer</li>


    </ul>

    </footer>



  </body>

  </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
