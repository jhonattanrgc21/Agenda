<?php 
    $con = new mysqli('localhost', 'root', '', 'agenda');
    if($con->connect_error)
        echo $con->connect_error;
?>