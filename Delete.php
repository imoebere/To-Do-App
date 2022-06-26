<?php
include "config.php";
$id = $_GET['ID'];
$delete = "DELETE FROM tbltodo WHERE id='$id'";
$query = mysqli_query($con, $delete);
header('location: index.php');
?>