<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Database Connection
    $conn = new mysqli('localhost','root','','test11');
    if($conn->connect_errno){
        die('Connection Failed : '.$conn->connect_errno);
    }else{
        $stmt = $conn->prepare("insert into login(username, password)
            values(?, ?)");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        echo "Successfully Login!";
        $stmt->close();
        $conn->close();
    }
?>