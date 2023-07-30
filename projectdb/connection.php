<?php
    $host = "localhost";
    $user = "root";
    $password = 'password';
    $db_name = "project";

    $conn = mysqli_connect($host, $user, $password, $db_name);
    if($conn)
{
    echo "Connection Established";
}
else{
    die("Connection Failed".mysqli_connect_error());
    }
?>
