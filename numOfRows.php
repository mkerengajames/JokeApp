<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 2/26/2019
 * Time: 4:18 AM
 */

require 'DBConnection.php';

class numOfRows
{
    public function getNumberRows($conn)
    {

        $sql = "select * from jokes";
        $result = mysqli_query($conn, $sql);
        $totalRows = mysqli_num_rows($result);
        return $totalRows;
    }
}