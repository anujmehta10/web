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

        if ($this
            ->conn
            ->connect_error)
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

    public function login($email,$password)
    {
        $sql="SELECT * FROM `tbl_user` WHERE `email`='$email' AND `password`='$password'";
        $result=$this->conn->query($sql);
        if ($result->num_rows>0)
        {
            while ($row = $result->fetch_assoc()) 
        // {
        //     if($row['active']==1)
        //     {
        //             if($row['is_admin']==1)
        //             {            
        //                 $_SESSION['admin'] = array('name'=>$row['name'],'id'=>$row['id']);
        //                 header('location:admin_dashboard.php');
        //             }
        //              else 
        //             {
        //                 $_SESSION['user'] = array('name'=>$row['name'],'user_id'=>$row['id']);
        //                  header('location:user_dashboard.php');
        //             }
        //     }
        //     else
        //     {
        //         $error="You are Not approved by admin";

        //     }

        // }
                $error='Logged in success';
                return $error;
                 
        } 
        else 
        {
            $error ='invalid details';
                 
        }
        return $error;
        $this->conn->close();

    }


          

    































    public function account($email,$name,$mobile,$password1,$securityque,$securityans)
    {
        $sql="INSERT INTO `tbl_user`(`email`,`name`,`mobile`,`email_approved`,`phone_approved`,`active`,`is_admin`,`sign_up_date`,`password`,`security_question`,`security_answer`) VALUES('$email','$name','$mobile','0','0','0','0',NOW(),'$password1','$securityque','$securityans')";
         $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
           return $result;
        
        }
        return false;
    }
























    





































}
