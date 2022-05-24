<?php

//verify.php

include('header.php');
include('class/Appointment.php');

$object = new Appointment;

if(isset($_GET["code"]))
{
    $object -> query = 
    "UPDATE patient
    SET email_verify = 'Yes'
    WHERE patient_verifycode = '".$_GET["code"]."'";

    $object -> execute();
    $_SESSION['success_message'] = '<div class = "alert alert-success"> 
    Your email has been verified. You can login into login page.</div>';

    header('location:login.php');

}

include('footer.php');

?>