<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 2/26/2019
 * Time: 3:19 AM
 */

if(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {

}else if((strpos($_SERVER['HTTP_USER_AGENT'], 'Edge'))){
        echo "<script>window.location.replace('/chromeOnly');</script>";
}else {
    echo "<script>window.location.replace('/chromeOnly');</script>";
}
