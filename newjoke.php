<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 9:29 AM
 */
require 'date.php';
require 'DBConnection.php';

$submit=$_POST['submit'];

$newJoketext = $_POST['newjoketext'];

$newJokedate = $date;


if(!(isset($submit))  || (!(isset($newJokedate))) || ((is_numeric($newJokedate)))) {
        $queryAddJoke = $conn->query("INSERT INTO jokes (JokeText,JokeDate) VALUES ('$newJoketext', '$newJokedate');");

        if ($queryAddJoke) {
            echo "<script>alert(\"Joke posted\");</script>";
        } else {
            echo "<script>window.location.replace('/JokeApp');</script>";
            //echo "<script>alert(\"Query error Joke not posted\");</script>";
        }

    }else {
        echo "<script>window.location.replace('/JokeApp');</script>";
        //echo "<script>alert(\"Check to enter correct joke before posting\");</script>";
    }

 ?>

<html>
<style>
    body{
        background: aliceblue;

    }
</style>
</html>