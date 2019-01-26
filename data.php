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

$queryIDs = $conn->query("select ID, JokeText, JokeDate from $databaseName");


if($queryIDs){
    echo "data received";
}else{
    echo "data received";
}

