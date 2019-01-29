<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 9:29 AM
 */
require 'date.php';
require 'DBConnection.php';

$newJoketext = $_POST['newjoketext'];
$newJokedate = $date;
$database;

if(!is_null($newJoketext)) {
    $queryAddJoke = $conn->query("insert into $database (JokeText,JokeDate) values ('$newJoketext', '$newJokedate')");
}else{
    echo "<script>alert(\"please enter joke before posting\");</script>";
}
if($queryAddJoke) {
    echo "<script>alert(\"Joke posted\");</script>";
}else{
    echo "<script>alert(\"Joke not posted\");</script>";
}
