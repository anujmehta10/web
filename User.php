<?php 
include_once('admin/config.php');
$db=new DB_con();
// session_start();
class User
{
	public function login($email,$password)
    {
    	$db=new DB_con();
        $sql="SELECT * FROM `tbl_user` WHERE `email`='$email' AND `password`='$password'";
        $result=$db->conn->query($sql);
        $error ="";
        $success="";
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()) 
            {
                if($row['active']==1)
                { 
                    
                        if($row['is_admin']==1)
                        {     
                           
                            $_SESSION['admin'] = array('name'=>$row['name'],'id'=>$row['id']);
                            return "redirect admin";
                            

                        }
                        else 
                        {
                            
                            $_SESSION['user'] = array('name'=>$row['name'],'id'=>$row['id']);
                            return "redirect user";  
                                   
                        }
                }
                else
                {
                    $error="You are Not approved by admin";
                    return $error;

                }

            }
                    $error='Logged in success';
                    return $error;
                            
            } 
        else 
        {
            $error ='invalid details';
            return $error;
                 
        }
        $db->conn->close();

    }
    public function validate($email,$mobile){
    	$db=new DB_con();
        $sql="SELECT * FROM `tbl_user` WHERE `email`='$email' OR `mobile`='$mobile'";
        $result=$db->conn->query($sql);
        if($result->num_rows>0){
            return $result;
        }
        return false;
    }

    public function account($email,$name,$mobile,$password1,$securityque,$securityans)
    {
    	$db=new DB_con();
        $sql="INSERT INTO `tbl_user`(`email`,`name`,`mobile`,`email_approved`,`phone_approved`,`active`,`is_admin`,`sign_up_date`,`password`,`security_question`,`security_answer`) VALUES('$email','$name','$mobile','0','0','0','0',NOW(),'$password1','$securityque','$securityans')";
         $result = $db->conn->query($sql);
        if ($result=== true){
           return $result;
        
        }
        return false;
    }
}



















 ?>