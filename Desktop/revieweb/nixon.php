<?php


include 'db.php';

session_start();
if(isset($_SESSION['email'])){

    $logmssg = $_SESSION['email'];
    $msg4 = "<a href='logout.php'></a>";
}else{


}



$sql = "SELECT *   FROM ratings WHERE name_of_accom LIKE '%Nixon Court%'";
$results = mysqli_query($conn, $sql);
$resultscheck = mysqli_num_rows($results);

if ($resultscheck > 0) {

  while ($row = mysqli_fetch_assoc($results)) {
    $review1 = $row['name_of_accom'];
    $review2 = $row['agency'];
    $review3 = $row['internet'].'/5';
    $review4 = $row['value'].'/5';
    $review5 = $row['reliability'].'/5';
    $review6 = $row['location'].'/5';
    $review7 = $row['quality'].'/5';
    $review8 = $row['comments'];
    $review9 = $row['updated'];
    $review10 = $row['Initials'];

  }
}




$review9 = date( 'm/d/y g:i A', strtotime($review9));

$query = "SELECT ROUND(AVG(value),0) as averageRating FROM ratings WHERE name_of_accom LIKE '%Nixon Court%'";
$result = mysqli_query($conn,$query);
$fetchAverage = mysqli_fetch_array($result);
$averageRating = $fetchAverage['averageRating'];

$return_arr = array("averageRating"=>$averageRating);
$reviewavg4 = $return_arr['averageRating'].'/5';

$query = "SELECT ROUND(AVG(reliability),0) as averageRating FROM ratings WHERE name_of_accom LIKE '%Nixon Court%'";
$result = mysqli_query($conn,$query);
$fetchAverage = mysqli_fetch_array($result);
$averageRating = $fetchAverage['averageRating'];

$return_arr = array("averageRating"=>$averageRating);
$reviewavg5 = $return_arr['averageRating'].'/5';

$query2 = "SELECT ROUND(AVG(location),0) as averageRating2 FROM ratings WHERE name_of_accom LIKE '%Nixon Court%'";
$result2 = mysqli_query($conn,$query);
$fetchAverage2 = mysqli_fetch_array($result2);
$averageRating2 = $fetchAverage2['averageRating'];

$return_arr2 = array("averageRating"=>$averageRating2);
$reviewavg6 = $return_arr2['averageRating'].'/5';

$query2 = "SELECT ROUND(AVG(quality),0) as averageRating2 FROM ratings WHERE name_of_accom LIKE '%Nixon Court%'";
$result2 = mysqli_query($conn,$query);
$fetchAverage2 = mysqli_fetch_array($result2);
$averageRating2 = $fetchAverage2['averageRating'];

$return_arr2 = array("averageRating"=>$averageRating2);
$reviewavg7 = $return_arr2['averageRating'].'/5';

$query2 = "SELECT ROUND(AVG(internet),0) as averageRating2 FROM ratings WHERE name_of_accom LIKE '%Nixon Court%'";
$result2 = mysqli_query($conn,$query);
$fetchAverage2 = mysqli_fetch_array($result2);
$averageRating2 = $fetchAverage2['averageRating'];

$return_arr2 = array("averageRating"=>$averageRating2);
$reviewavg3 = $return_arr2['averageRating'].'/5';




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

     <a href="https://twitter.com/Reviews4Student?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Reviews4Student</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
     <div class="fb-like" data-href="https://www.facebook.com/Reviews4Students-382965942181210/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
           </div>


<div class="reviews">
  <div class="row blockquote review-item">
    <div class="col-md-3 text-center">

      <div class="caption">
        <small></small>
      </div>

    </div>

    <div class="imgnewarke">
  <h1>Nixon Court</h1>
      <img src="CSS/newarke.jpg" alt="newarke">

    </div>

    <div class="col-md-9">
      <h3>Average Rating:</h3>
      <div class="ratebox text-center" data-id="0" data-rating="5"></div>

      <h5>Name of Accomodation: <?php echo $review1 ?>  </h5>
     <h5>Lettings/Housing Agency: <?php echo $review2 ?></h5>
     <h5>Value for Money: <?php echo $reviewavg4 ?></h5>
     <h5>Reliability: <?php echo $reviewavg5 ?></h5>
     <h5>Location: <?php echo $reviewavg6 ?></h5>
     <h5>Quality of Living Space: <?php echo $reviewavg7 ?></h5>
     <h5>Internet: <?php echo $reviewavg3 ?></h5>




    </div>
  </div>
</div>









<div class="reviews">
  <div class="row blockquote review-item">
    <div class="col-md-3 text-center">
      <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
      <div class="caption">
        <small></small>
      </div>

    </div>

    <div class="imgnewarke">
      <img src="CSS/newarke.jpg" alt="newarke">

    </div>
    <div class="col-md-9">
      <h3>Latest review:</h3>
      <div class="ratebox text-center" data-id="0" data-rating="5"></div>
      <p>Initials: <?php echo $review10 ?></p>
      <p>Name of Accomodation: <?php echo $review1 ?>  </p>
     <p>Lettings/Housing Agency: <?php echo $review2 ?></p>
     <p>Value for Money: <?php echo $review4 ?></p>
     <p>Reliability: <?php echo $review5 ?></p>
     <p>Location: <?php echo $review6 ?></p>
     <p>Quality of Living Space: <?php echo $review7 ?></p>
     <p>Internet: <?php echo $review3 ?></p>
     <p>Further Comments: <?php echo $review8 ?></p>


      <small class="review-date"><p>Time: <?php echo $review9 ?></p></small>
    </div>
    <div class="revbttn">
    <h5><a href="postrev.php">POST REVIEW NOW</h5></a>
  </div>
  </div>

</div>
</div>

           <div class="reviews">
             <div class="row blockquote review-item">

               <div class="addressdetails">
                 <li><h6>Address:42 Western Rd, Leicester LE3 0GH </h6></li>
                 <li><h6>Phone Number: 0116 233 5678</h6></li>

               </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2421.7288305238235!2d-1.1495230842251352!3d52.628744279834976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487760db3cdaae49%3A0x2e0c189ab07084b3!2sCODE+Student+Accommodation!5e0!3m2!1sen!2suk!4v1525108339354" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
                 </div>
                 <div class="caption">
                   <small></small>
                 </div>
               </div>
             </div>
           </div>

           <div class="revbttn">
           <h5><a href="nixon.php">REGISTER</h5></a>
         </div>
    <footer>
    	<ul>
    		<li><a href="login.php">login</a></li>
      <li><a href="Contact_Us.php">Contact Us</a></li>
      <li><a href="legal.php">legal disclaimer</li>


    </ul>

    </footer>


 </body>

 </html>
