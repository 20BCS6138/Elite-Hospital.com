<?php
    $_SERVER['REQUEST_METHOD']=='POST';
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    
    $conn = mysqli_connect("localhost", "root", "", "elitehosp");

    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

    else{ 
    $sql = "INSERT INTO `contact` ( `fname`, `email`, `mobile`, `message`) 
    VALUES ('$fname', '$email', '$mobile', '$message')";
    $rs = mysqli_query($conn, $sql);
    }

if($rs)
{  
	echo "We will get back you soon.";
}

?>