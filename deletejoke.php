<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 9:29 AM
 */
require 'DBConnection.php';
require 'date.php';


echo $index = $_POST['index'];
echo $database;

$delete = $_POST['delete'];


if((isset($delete)) && $index > 0 ) {

        $sql = "delete from $database where id = $index;";

        $queryDeleteJoke = $conn->query($sql);

        if ($queryDeleteJoke != null) {
            //echo "<script>window.location.replace('/JokeApp');</script>";
            echo "<script>alert(\"Joke deleted\");</script>";
        } else {
            //echo "<script>window.location.replace('/JokeApp');</script>";
            echo "<script>alert(\"Query error Joke deleted\");</script>";
        }
    } else {
        //echo "<script>window.location.replace('/JokeApp');</script>";
        echo "<script>alert(\"nothing to delete\");</script>";
    }


?>

<html>
<style>
    body{
        background: aliceblue;

    }
</style>
</html>
