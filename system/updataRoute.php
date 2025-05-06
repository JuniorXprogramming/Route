<?php 
    include("dbconnect.php");
    $id = $conn->real_escape_string($_POST['route_id']); 
    $source = $conn->real_escape_string($_POST['routeStart']); 
    $des = $conn->real_escape_string($_POST['routeDes']); 
    $price = $conn->real_escape_string($_POST['routePrice']); 
    $detail = $conn->real_escape_string($_POST['routeDetail']); 
    $sql = "UPDATE route_minibus SET route_start = '$source', route_des = '$des', route_price = '$price', route_detail = '$detail' WHERE route_id = '$id'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert(\"Record Updated Successfully\")</script>";
        header("Location: ../adminMain.php");
    }else{
        echo "<script>alert(\"Record Updated Failed\")</script>";
        header("Location: ../adminMain.php");
    }
?>