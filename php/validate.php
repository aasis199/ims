<?php
include 'db.php';

if(isset($_POST["name"], $_POST["password"])) 
        {     

            $name = $_POST["name"]; 
            $password = $_POST["password"]; 

            $result1 = mysql_query("SELECT password FROM Users WHERE username = '".$name."'");
            $result2 = mysql_query("SELECT username FROM Users WHERE password = '".$password."'");

            if($name == $result2 && $password == $result1) 
            { 
                $_SESSION["logged_in"] = true; 
                $_SESSION["naam"] = $name; 
            }
            else
            {
                echo'The username or password are incorrect!';
            }
    } 

?>

