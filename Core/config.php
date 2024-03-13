<?php
    class Config
    {
        $server="gateway01.ap-southeast-1.prod.aws.tidbcloud.com";        //127.0.0
        $user="3TZcRxCtCrvrfgX.root";               
        $pass="K9tFcYrvm5t19nKz";
        $database="Motoserv";
        $port = 4000;     
        function connect()
        {
            try
            {
                $connect = mysqli_connect($server, $user, $pass, $database, $port);
                return $connect;
            }
            catch(Exception $e) 
            {
                die($e);
            }
        }
         
    }
