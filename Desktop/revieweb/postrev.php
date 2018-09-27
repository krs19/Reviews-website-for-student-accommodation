        <?php
        include 'db.php';
        session_start();
        if(isset($_SESSION['email'])){

            $msg3 =  $_SESSION['email'];
            $msg4 = "<a href='logout.php'></a>";
        }




         else {
      header('Location:login.php');
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
       <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
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
          }(document, 'script', 'facebook-jssdk'));
       </script>
       <div class="header">
          <a href="index.php">
          <img src="CSS/name.png" alt = "title">
          </a>
          <nav class="clearfix">
             <ul class="clearfix">
                <li><a href="viewreviews.php">View Reviews</a>
                <li>
                <li><a href="newsfeed.php">News</a>
                <li>
                <li><a href="contact.php">Contact</a>
                <li>
                <li><a href="postrev.php">Post Review</a>
                <li>
             </ul>
             <a href="#" id="pull">Menu</a>
          </nav>
          <div class="regbutton">
             <h5><a href="register.php">REGISTER</h5>
             </a>
             <div class="logbutton">
                <?php if(isset($msg4)) { ?>
                <h5>
                <a href="logout.php" class="logsoutbutton">LOG OUT</a>
                <h5>
                <?php echo $msg4; ?>
             </div>
             <?php } ?>
          </div>
          <a href="https://twitter.com/Reviews4Student?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Reviews4Student</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <div class="fb-like" data-href="https://www.facebook.com/Reviews4Students-382965942181210/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
       </div>
       <div class="container">
          <form method ="post" action="revprocess.php" role="form" name="revform">
             <div class="form-group">
                <label for="exampleFormControlInput1">Initials</label>
                <input name="initials" type="text"  class="form-control" id="initials" placeholder="e.g. Joe Bloggs would be JB">
             </div>
             <div class="form-group">
                <label for="exampleFormControlInput1">* Name of Lettings Agent/Landlord</label>
                <input name="agencyname" type="text" class="form-control" id="agencyname" placeholder="E.g Lettings agency/private landlord" >
                <div id="displays"></div>
             </div>
             <div class="form-group">
                <label for="exampleFormControlInput1">* Name of accomodation/House</label>
                <input name="accomodation" type="search" class="form-control" id="accomodation" placeholder="student halls">
             </div>
             <div class="form-group">
                <label for="exampleFormControlSelect1">* Value for Money</label>
                <select name="valueof" class="form-control" id="exampleFormControlSelect1">
                   <option disabled = "disabled" selected="selected">Select an option</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                </select>
             </div>
             <div class="form-group">
                <label for="exampleFormControlSelect1">* Reliability</label>
                <select class="form-control" id="exampleFormControlSelect1"name="reliability">
                   <option disabled = "disabled" selected="selected">Select an option</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                </select>
             </div>
             <div class="form-group">
                <label for="exampleFormControlSelect1">* Location</label>
                <select class="form-control" id="exampleFormControlSelect1" name="location">
                   <option disabled = "disabled" selected="selected">Select an option</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                </select>
             </div>
             <div class="form-group">
                <label for="exampleFormControlSelect1">* Quality of living space</label>
                <select class="form-control" id="exampleFormControlSelect1"name="quality">
                   <option disabled = "disabled" selected="selected">Select an option</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                </select>
             </div>
             <div class="form-group">
                <label for="internet">* Internet</label>
                <select class="form-control" id="exampleFormControlSelect1"name="internet">
                   <option disabled = "disabled" selected="selected">Select an option</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                </select>
             </div>

             <div class="form-group">
                <label for="exampleFormControlTextarea1">Further Comments</label>
                <textarea  name="comments" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea >
             </div>
             <button name ="reviewsubmit" type="submit" >Post Review</button>
          </form>
          <h3>
             1-lowest     5-highest
          </h3>
          <?php if(isset($msgempty)) { ?>
          <h5>
          Check all fields</a>
          <h5>
          <?php echo $msgempty; ?>
          <?php } ?>
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
