<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'chukwu', 'chukwu1234', 'paschal');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?> 


<!--  -->