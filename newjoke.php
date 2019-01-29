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


if((isset($submit))  && (!(empty($newJoketext))) && (!(is_numeric($newJoketext)))) {
        $sql = "INSERT INTO jokes (
                                                                JokeText, 
                                                                JokeDate
                                                                )
                                                        VALUES (
                                                                  '$newJoketext', 
                                                                  '$newJokedate'
                                                                );
                                            ";

        $queryAddJoke = $conn->query($sql);

        if ($queryAddJoke != null) {
            echo "<script>window.location.replace('/JokeApp');</script>";
            echo "<script>alert(\"Joke posted\");</script>";
        } else {
            echo "<script>window.location.replace('/JokeApp');</script>";
            echo "<script>alert(\"Query error Joke not posted\");</script>";
        }
    }else {
        echo "<script>window.location.replace('/JokeApp');</script>";
        echo "<script>alert(\"Check to enter correct joke before posting\");</script>";
    }

 ?>

<html>
<style>
    body{
        background: aliceblue;

    }
</style>
</html>