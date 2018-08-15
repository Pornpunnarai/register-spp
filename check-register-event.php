<?php

include 'connect-mysql.php';

//echo 'dsads s';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$position = $_POST["position"];
$company = $_POST["company"];

if($email!=="") {
    $sql = "SELECT `email` FROM `regis-event` WHERE `email`= '" . $email . "'";
    $objQuery = mysqli_query($objCon, $sql);
    $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
    $check_email = $result["email"];

    if($email == $check_email){
        echo 0;
    }

    else{
        $sql = "INSERT INTO `regis-event`(`firstname`, `lastname`, `email`, `phone`, `position`, `company`)
        VALUES ('" . $firstname . "','" . $lastname . "','" . $email . "','" . $phone . "','" . $position . "','" . $company . "')";
        $objQuery = mysqli_query($objCon, $sql);
        echo 1;
    }

}


//echo $sql;
?>


