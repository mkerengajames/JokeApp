<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 6:53 AM
 */
require 'DBConnection.php';

$databaseName = " jokes";

$sql = "use $databaseName";

$db = $conn->query($sql);

if ($db) {
    echo "Database connected successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

$query = $conn->query("select JokeText, JokeDate from $databaseName");


if($query){
    echo "data received<br><br>";
}else{
    echo "data received";
}



