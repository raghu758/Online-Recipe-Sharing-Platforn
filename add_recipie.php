<?php
include "config.php";

$title = $_POST['title'];
$description = $_POST['description'];

$imageName = $_FILES['image']['name'];
$tempName = $_FILES['image']['tmp_name'];
$folder = "../assets/images/" . $imageName;

move_uploaded_file($tempName, $folder);

$sql = "INSERT INTO recipes (title, description, image)
        VALUES ('$title', '$description', '$imageName')";

if (mysqli_query($conn, $sql)) {
    echo "Recipe Added Successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
