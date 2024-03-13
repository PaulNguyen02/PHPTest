<?php
    class Config
    {
        const $server="gateway01.ap-southeast-1.prod.aws.tidbcloud.com";        //127.0.0
        const $user="3TZcRxCtCrvrfgX.root";               
        const $pass="K9tFcYrvm5t19nKz";
        const $database="Motoserv";
        const $port = 4000;     
        function connect()
        {
            try
            {
                $conn = mysqli_connect($server, $user, $pass, $database, $port);
                return $conn;
            }
            catch(Exception $e) 
            {
                die($e);
            }
        }
         
    }
