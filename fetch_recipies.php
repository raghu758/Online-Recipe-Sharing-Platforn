<?php
include "config.php";

$sql = "SELECT * FROM recipes ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$recipes = [];

while ($row = mysqli_fetch_assoc($result)) {
    $recipes[] = $row;
}

echo json_encode($recipes);
?>
