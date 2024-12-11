<?php
session_start();
include_once "config.php";
$sql = "SELECT * FROM users";
$output = "";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) == 1) {
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($query) > 0) {
    include "data.php";
}
echo $output;
?>