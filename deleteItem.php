<?php
include 'config.php';

$itemID = $_GET['id'];
$query = "delete from up where itemID='".$itemID."'";
$result = mysqli_query($conn, $query);
echo '<script type="text/javascript">alert("Item has been successfully deleted !");</script>';
header("Location:search.php");
?>