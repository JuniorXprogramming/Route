<?php 
    include("dbconnect.php");
    $sql = "SELECT * FROM route_minibus";
    $result = $conn->query($sql);
    $data = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
    }
    echo json_encode($data);
?>