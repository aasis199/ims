<?php 	

require_once 'core.php';

// $valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $name= $_POST['name'];
  $category = $_POST['category'];
  $stock = $_POST['qty'];
  $sku = $_POST['sku_num'];
  $price = $_POST['price'];
  $status = $_POST['status'];
	
				$sql = "INSERT INTO inventory (name, category, stock, sku, price, status) 
				VALUES ('$name' , '$category', '$stock', '$sku', '$price','$status')";
				if($connect->query($sql) === TRUE) {
					header('location: http://localhost/ims/inventory.php');	
			} else {
				echo('not Success');

			}

				// /else	
		
	} // if in_array 		

	$connect->close();
