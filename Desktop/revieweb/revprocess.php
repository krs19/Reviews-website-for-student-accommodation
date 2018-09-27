<?php include 'db.php';



$Agency =mysqli_real_escape_string ($conn, $_POST['agencyname']);
$Accom =mysqli_real_escape_string ($conn, $_POST['accomodation']);
$Value =mysqli_real_escape_string ($conn, $_POST['valueof']);
$Reliability = mysqli_real_escape_string ($conn,$_POST['reliability']);
$Location =mysqli_real_escape_string ($conn, $_POST['location']);
$Quality =mysqli_real_escape_string ($conn, $_POST['quality']);
$Internet =mysqli_real_escape_string ($conn, $_POST['internet']);
$Comments =mysqli_real_escape_string ($conn, $_POST['comments']);
$Initials = mysqli_real_escape_string($conn, $_POST['initials']);

 $sql = "INSERT INTO ratings (Initials, agency, name_of_accom, value, reliability, location, quality, internet, comments) VALUES ('$Initials','$Agency','$Accom','$Value','$Reliability', '$Location', '$Quality', '$Internet', '$Comments')";
 $result = mysqli_query($conn, $sql);
 if($result) {
   header('Location:revsuccess.php');
echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
 } else {
    echo "<script type='text/javascript'>alert('failed!')</script>";
 }
