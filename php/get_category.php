<?php
require 'php/db_connect.php';

$sql = "SELECT id, name from category";
$result = $connect->query($sql);

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    echo "<option name='name' class='p-10' value=" . $row['name'] . ">" . $row['name'] . "</option>";
}
?>