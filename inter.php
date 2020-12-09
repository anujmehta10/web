<?php session_start();
include('config.php');
$obj=new DB_con();

  if(isset($_POST['login']))
    {
      $arr="";
    	$email=$_POST['email'];
    	$password=$_POST['password'];
      $result=$obj->login($email,$password);
        $arr=$result;
        echo json_encode($arr);
      
    }

    


    if(isset($_POST['account']))
    {
      $name=$_POST['name'];
      $mobile=$_POST['mobile'];
      $email=$_POST['email'];
      $securityque=$_POST['securityque'];
      $securityans=$_POST['securityans'];
      $password1=$_POST['password1'];
      
      $result=$obj->account($email,$name,$mobile,$password1,$securityque,$securityans);
      if($result!=false){
        $row=array();
        while($arr=$result->fetch_assoc()){
          $row[]=$arr;
        }
        print(json_encode($row));
       }
        else{
          echo "false";
        }
    }