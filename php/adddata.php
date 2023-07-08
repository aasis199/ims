<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql ="INSERT INTO chat(name, phone, email, message) VALUES('$name', '$phone', $email', '$message')";
$result = mysqli_query($conn, $sql);

 if($result){
    header('Location:index.html');
}

?>