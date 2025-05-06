<?php 
    include("dbconnect.php");
    session_start();
    $user = $conn-> real_escape_string($_POST['user']);
    $pass = $conn -> real_escape_string(md5($_POST['pass']));
    $sql = "SELECT * FROM member WHERE mem_user = '$user' AND mem_pass = '$pass'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        if($row['mem_speAcc'] == 1){
            $_SESSION['logged'] = "admin";
            header("Location: ../adminMain.php");
        }else{
            $_SESSION['logged'] = "user";
            header("Location: ../index.php");
        }
    }
?>