<?php
//saved in db
$username = "acad";
$password = "acad2013";


// user input

$username1 = "aacad";
$password1 = "acad2213";

if ($username1 == $username) {
	if ($password1 == $password) {
		echo "Welcome, $username!";
	} else {
		echo "Wrong password";
	}//if/else password
	
} else {
	echo "Wrong username!";
}//if/else username