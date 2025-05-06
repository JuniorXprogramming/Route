<?php
include("dbconnect.php");
$id = $conn->real_escape_string($_POST['route_id']);
$source = $conn->real_escape_string($_POST['routeStart']);
$des = $conn->real_escape_string($_POST['routeDes']);
$price = $conn->real_escape_string($_POST['routePrice']);
$detail = $conn->real_escape_string($_POST['route_detail']);
$stmt = $conn->prepare("INSERT INTO route_minibus(route_start, route_des, route_price, route_detail) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $source, $des, $price, $detail);
$stmt->execute();
echo "<script>alert(\"Record Inserted Successfully\")</script>";
header("Location: ../adminMain.php");

$stmt->close();
$conn->close();
?>