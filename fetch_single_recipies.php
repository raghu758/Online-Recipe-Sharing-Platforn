<?php
include "config.php";

$id = $_GET['id'];

$sql = "SELECT * FROM recipes WHERE id = $id";
$result = mysqli_query($conn, $sql);

echo json_encode(mysqli_fetch_assoc($result));
?>
