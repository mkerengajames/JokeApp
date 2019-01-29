<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 6:37 AM
 */
$database = "jokes";
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username , $password);

if($conn){
    //echo("server connect success<br>");
}else{
    echo("server connect fail");
}

