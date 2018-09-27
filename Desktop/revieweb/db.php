<?php

// Connect to MySQL
$conn = mysqli_connect('localhost', 'root', '', 'users');


if(mysqli_connect_errno()){
	echo 'DB Connection Error: '.mysqli_connect_error();
}
