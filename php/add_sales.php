<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if ($_POST) {
    $ino = $_POST['ino'];
    $date = $_POST['date'];
    $name = $_POST['name'];


    $sql = "INSERT INTO `sales`(`ino`, `date`, `name`, `total`) VALUES ('$ino','$date', '$name','100')";
    // $sql = "INSERT INTO sales (ino,date, name, total) VALUES ('$ino, '$date', '$name', '200')";
    if ($connect->query($sql) === TRUE) {
        header('location: http://localhost/ims/sales.php');
        $valid['success'] = true;
        $valid['messages'] = "Successfully Added";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while adding sales";
    }

    // /else	

} // if in_array 		m 

$connect->close();