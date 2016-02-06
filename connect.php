<?php
$connection = new mysqli ("localhost", "root", "root", "mcq_quiz");
if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$select_db = mysqli_select_db($connection, 'mcq_quiz');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
