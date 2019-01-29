<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 6:53 AM
 */

require 'DBConnection.php';
require 'date.php';


$query = $conn->query("select JokeText, JokeDate from $database");


if($query){
    //echo "data received<br><br>";
}else{
    echo "data received";
}







