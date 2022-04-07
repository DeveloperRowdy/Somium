<?php
$conn = new mysqli('localhost','u378807222_somium','Somium1234!','u378807222_somium');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
?>