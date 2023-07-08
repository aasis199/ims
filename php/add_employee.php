<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
  $name= $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $d_joined = $_POST['date'];
  $salary = $_POST['salary'];
  $department = $_POST['department'];


	
				$sql = "INSERT INTO employee (name, phone,email, address, date, salary, department) 
				VALUES ('$name', '$phone' , '$email', '$address', '$d_joined', '$salary', '$department')";
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding employee";
				}

				// /else	
		
	} // if in_array 		

	$connect->close();
