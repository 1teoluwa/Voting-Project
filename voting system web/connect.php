<?php
$con = new mysqli("localhost","root","","voting");
if(!$con){
    die(mysqli_error($con));
}
?>