<?php include 'db.php';


if(isset($_POST)){
$Email =mysqli_real_escape_string ($conn, $_POST['email']);
$Name =mysqli_real_escape_string ($conn, $_POST['firstname']);
$Surname =mysqli_real_escape_string ($conn, $_POST['lastname']);
$salt = "hqufehef07935793110hddh";
$Password = $_POST['password'].$salt;
$Password = sha1($Password);

 $sql = "INSERT INTO registered_users (Student_email, first_name, last_name, password) VALUES ('$Email','$Name','$Surname','$Password')";
 $results = mysqli_query($conn, $sql);
 if($results) {
     header("Location:login.php");
 } else {
    echo "error";
 }
}
