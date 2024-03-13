<?php
    class Config
    {
        const server="gateway01.ap-southeast-1.prod.aws.tidbcloud.com";        //127.0.0
        const user="3TZcRxCtCrvrfgX.root";               
        const pass="K9tFcYrvm5t19nKz";
        const database="Motoserv";
        const port = 4000;     
        function connect()
        {
            try
            {            
                $conn = mysqli_init();
                mysqli_ssl_set(
                    $conn,
                    null,
                    null,
                    './isrgrootx1.pem',
                    null,
                    null
                );
                
                mysqli_real_connect(
                    $conn,
                    self::server,
                    self::user,
                    self::pass,
                    self::database,
                    self::port,
                );
                
                if (mysqli_connect_errno()) {
                    die("Failed to connect to MySQL: " . mysqli_connect_error());
                }
                
                return $conn;
            }
            catch(Exception $e) 
            {
                die($e);
            }
        }
    }
