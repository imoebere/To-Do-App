<?php
include "config.php";
$List = $_POST['list'];
$ID= $_POST['id'];
$update = "UPDATE tbltodo SET list='$List' WHERE id='$ID'";
$query = mysqli_query($con, $update);
header('location: index.php');
?>