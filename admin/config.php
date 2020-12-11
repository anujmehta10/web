<?php 
class DB_con
{
    public $conn;
    public $dbhost;
    public $dbuser;
    public $dbpass;
    public $dbname;
    function __construct()
    {
        $siteurl = "http://localhost/cedhosting/";
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "cedhosting";

        $this->conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if ($this ->conn ->connect_error)
        {
            die("Connection failed: " . $this
                ->conn
                ->connect_error);
        }
        else
        {
            //echo "Connected successfully";
            
        }

    }

   

}
