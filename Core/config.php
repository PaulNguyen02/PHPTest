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
                mysqli_ssl_set(NULL, './isrgrootx1.pem', './isrgrootx1.pem', NULL, NULL); 
                $conn = mysqli_connect(self::server, self::user, self::pass, self::database, self::port);   
                #$conn = mysqli_init();
              
                #mysqli_ssl_set(NULL, './isrgrootx1.pem', './isrgrootx1.pem', NULL, NULL); 
                
                #if (!mysqli_real_connect($conn,self::server,self::user,self::pass,self::database, self::port))
                #{
                  #die("Connect Error: " . mysqli_connect_error());
                #} 
                return $conn;
            }
            catch(Exception $e) 
            {
                die($e);
            }
        }
    }
