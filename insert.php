<?php
include "config.php";
$list = $_GET['list'];
$insert = "INSERT INTO tbltodo (list)VALUES('$list')";

$query = mysqli_query($con, $insert);
header('location: index.php')
?> 