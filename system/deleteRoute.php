<?php
include("dbconnect.php");
$id = $conn->real_escape_string($_POST['route_id']);
$sql = "DELETE FROM route_minibus WHERE route_id = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: ../adminMain.php");
?>