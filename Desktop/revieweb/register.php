<?php
session_start();
if(isset($_SESSION['email'])){
    $msg3 =$_SESSION['email'];
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
    <script src="javascript/jquery-3.3.1.min.js"></script>
    <script src="javascript/scripts.js"></script>
  </head>


  <body>


    <div class="header">
      <a href="index.php">
        <img src="CSS/name.png" alt = "">
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

  <div class="logsmess">
    <?php if(isset($msg3)) { ?> <h5>Logged in as:<h5> <?php echo $msg3; ?>

    </div>


    <?php } ?>
  <div class="regbutton">
  <h5><a href="register.php">REGISTER</h5></a>
  <div class="logbutton">


  <?php if(isset($msg4)) { ?> <h5><a href="logout.php" class="logsoutbutton">LOG OUT</a><h5> <?php echo $msg4; ?>

  </div>


  <?php } ?>
  </div>

</div>
</div>
</div>
<body>


  <div class="containers">
  	<div class="rowsof">
          <div class="col-md-6">
              <form action="process.php" method="post" id="fileForm" role="form">
              <fieldset><legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>



              <div class="form-group">
                  <label for="firstname"><span class="req">* </span> First name: </label>
                      <input class="form-control" type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required />
                          <div id="errFirst"></div>
              </div>



              <div class="form-group">
                  <label for="lastname"><span class="req">* </span> Last name: </label>
                      <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)"  required />
                          <div id="errLast"></div>
              </div>

              <div class="form-group">
                  <label for="email"><span class="req">* </span> Email Address(University email address): </label>
                      <input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />
                          <div class="status" id="status"></div>
              </div>




              <div class="form-group">
                  <label for="password"><span class="req">* </span> Password: </label>
                      <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>

                  <label for="password"><span class="req">* </span> Password Confirm: </label>
                      <input required name="password" type="passwords" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                          <span id="confirmMessage" class="confirmMessage"></span>
              </div>

              <div class="form-group">


                  <hr>

                  <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="legal.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
              </div>

              <div class="form-group">

              <button class="reg_button" type="submit" value="Submit">Register</button>
              </div>
                        <h5>You will receive an email to complete the registration and validation process. </h5>
                        <h5>Be sure to check your spam folders. </h5>


              </fieldset>
              </form>

</div>
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


  </html>
