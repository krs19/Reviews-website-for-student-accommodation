<?php include 'db.php';


if(isset($_POST)){
$Name =mysqli_real_escape_string ($conn, $_POST['name']);
$Surname =mysqli_real_escape_string ($conn, $_POST['lastname']);
$Email =mysqli_real_escape_string ($conn, $_POST['email']);
$Message =mysqli_real_escape_string ($conn, $_POST['message']);


 $sql = "INSERT INTO contacts (firstname, lastname, email, messages) VALUES ('$Name','$Surname','$Email','$Message')";
 $results = mysqli_query($conn, $sql);
 if($results) {
     header("Location:contactsuccess.php");
 } else {
    echo "error";
 }
}
