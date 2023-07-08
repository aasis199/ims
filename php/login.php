<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $email= $_POST['email'];
  $password = $_POST['password'];

$sql ="INSERT INTO chat(email, password) VALUES('$email', '$password')";
$result = mysqli_query($conn, $sql);

    header('Location:index.html');

}
?>