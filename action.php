<?php

/*

action.php
operasi tindakan berlaki sini

*/


include('class/temujanji.php');

$object = new Appointment;

if(isset($_POST["action"]))
{

    //tindakan untuk sahkan login akaun pelanggan, sama ada betul atau sebaliknya
    if($_POST["action"] == 'check_login')
    {
        if(isset($_SESSION['id_pelanggan']))
        {
            echo 'dashboard_pelanggan.php';
        }
        else
        {
            echo 'login_pelanggan.php';
        }
    }


    //tindakan untuk daftar pelanggan
    if($_POST['action'] == 'daftar_pelanggan')
    {
        $error = '';
        $success = '';

        $data = array( 'email_pelanggan'  =>  $_POST["email_pelanggan"]);

        $object -> query = "SELECT * FROM table_pelanggan WHERE email_pelanggan = :email_pelanggan";
        $object -> execute($data);

        if($object -> row_count() > 0)
        {
            $error = '<div class="alert alert-danger">Email dah wujud</div>';
        }
        else
        {
            $kod_verify_pelanggan = md5(uniqid());
            $data = array(
                ':email_pelanggan'		        =>	$object->clean_input($_POST["patient_email_address"]),
				':password_pelanggan'			=>	$_POST["patient_password"],
				':nama_pelanggan'			    =>	$object->clean_input($_POST["patient_first_name"]),
				':alamat_pelanggan'				=>	$object->clean_input($_POST["patient_address"]),
				':notelefon_pelanggan'			=>	$object->clean_input($_POST["patient_phone_no"]),
				':nama_haiwan'		            =>	$object->clean_input($_POST["patient_maritial_status"]),
				':tambahan_haiwan'				=>	$object->now,
				':kod_verify_pelanggan'	        =>	$kod_verify_pelanggan,
				':email_verify'					=>	'No'
            );    
            
            //masuk dalam SQL database
            $object -> query = "INSERT INTO table_pelanggan (email_pelanggan, password_pelanggan,
            nama_pelanggan, alamat_pelanggan, notelefon_pelanggan, nama_haiwan, tambahan_haiwan, kod_verify_pelanggan,
            email_verify) VALUES (:email_pelanggan, :password_pelanggan,
            :nama_pelanggan, :alamat_pelanggan, :notelefon_pelanggan, :nama_haiwan, :tambahan_haiwan, :kod_verify_pelanggan,
            :email_verify)";

            $object -> execute($data);




        }

    }

}
?>