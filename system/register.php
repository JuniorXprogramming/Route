<?php 
    include("dbconnect.php");
    session_start();
    $user = $conn->real_escape_string($_POST['user']);
    $pass = $conn->real_escape_string(md5($_POST['pass']));
    $email = $conn->real_escape_string($_POST['email']);
    $addr = $conn->real_escape_string($_POST['addr'] .$_POST['district']. " " .$_POST['city']. " " .$_POST['postcode']);
    $speAcc = $conn->real_escape_string("0");
    $stmt = $conn->prepare('INSERT INTO member(mem_user,  mem_pass,  mem_email,  mem_addr,  mem_speAcc) VALUES (?,?,?,?,?)');
    $stmt->bind_param("sssss", $user, $pass, $email, $addr, $speAcc);
    $sql = "SELECT * FROM member WHERE mem_user = '$user'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "<script>alert(\"Username is have Already\")</script>";
    }else{
        $stmt->execute();
        $stmt->close();
        $conn->close();
        $_SESSION['logged'] = "success";
        echo "<script>alert(\"Record Infomation Successfully\")</script>";
    }
    header("Location: ../index.php");
?>