<?php
    $_SERVER['REQUEST_METHOD']=='POST';
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $date1 = $_POST['date1'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal = $_POST['postal'];
    
    $conn = mysqli_connect("localhost", "root", "", "elitehosp");

    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

    else{ 
    $sql = "INSERT INTO `appointment` ( `fullname`, `email`, `mobile`, `date1`, `area`,`city`, `state`,`postal` ) 
    VALUES ('$fullname', '$email', '$mobile', '$date1', '$area','$city','$state', '$postal')";
    $rs = mysqli_query($conn, $sql);
    }

if($rs)
{
	echo "Appointed Booked Successfully";
}

?>