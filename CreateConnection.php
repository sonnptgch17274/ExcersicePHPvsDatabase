<?php
    $servername = "localhost";
    $port = "3306"; // MySQL port
    $username = "root"; // user name to login to MySQL
    $password = ""; // password to login to MySQL
    $dbname = "gwcourse"; // name of the database in MySQL

    // connect to MySQL database
    $conn = new mysqli($servername . ":". $port , $username, $password,$dbname);
    //test if connect successfully
    // echo "Done";
?>