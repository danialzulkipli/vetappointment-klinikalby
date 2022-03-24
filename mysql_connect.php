<?php

    //define connection to database
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'vetappointment_db');
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    session_start();

    //send username & password from login

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";

    //check connection
    if ($mysqli->connect_error) {
        echo 'Error: '.$mysqli->connect_errno;
        echo '<br>';
        echo 'Error: '.$mysqli->connect_error;
        exit();
      }
    
      echo 'Success: A proper connection to MySQL was made.';
      echo '<br>';
      echo 'Host information: '.$mysqli->host_info;
      echo '<br>';
      echo 'Protocol version: '.$mysqli->protocol_version;
    
      $mysqli->close();

?>