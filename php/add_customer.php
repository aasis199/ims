<?php

require_once 'core.php';

date_default_timezone_set('Asia/Kathmandu');
$valid['success'] = array('success' => false, 'messages' => array());

if ($_POST) {

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];


	$sql = "INSERT INTO customer (name, phone,email, address, date) 
				VALUES ('$name', '$phone' , '$email', '$address', CURRENT_TIMESTAMP)";
	if ($connect->query($sql) === TRUE) {
		header('location: http://localhost/ims/customer.php');
		// $valid['success'] = true;
		// $valid['messages'] = "Successfully Added";
		$messages = array(
			'exists' => 'category %s exists',
			'failed' => 'query %s failed'
			);
	} else {
		echo ('not Success');

	}

	// /else	

} // if in_array 		

$connect->close();