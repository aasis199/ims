<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if ($_POST) {
    $name = $_POST['name'];
    $tags = $_POST['tags'];


    $sql = "INSERT INTO category (name,tags) VALUES ('$name', '$tags')";
    if ($connect->query($sql) === TRUE) {
        header('location: http://localhost/ims/category.php');
    } else {
        echo ('not Success');

    }

    // /else	

} // if in_array 		

$connect->close();