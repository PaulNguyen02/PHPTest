<?php
    try
    {
        $server="gateway01.ap-southeast-1.prod.aws.tidbcloud.com";        //127.0.0
        $user="3TZcRxCtCrvrfgX.root";               
        $pass="47zX1ciKfQyp4O7c";
        $database="Motoserv";
        $conn = mysqli_connect($server, $user, $pass, $database);
    }
    catch(Exception $e) 
    {
        die($e);
    }
?>
