<!-- </opt/lampp/htdocs/cedhosting/inter.php> Not Admin(onlu user) -->
<?php session_start();
include_once('admin/config.php');
$obj=new DB_con();
include_once('User.php');
$ob=new User();
include_once('admin/Product.php');
$pro=new Product();


  if(isset($_POST['login']))
    {
      $arr="";
    	$email=$_POST['email'];
    	$password=$_POST['password'];
      $result=$ob->login($email,$password);
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

      $abc=$ob->validate($email,$mobile);
      {
      if($abc==false)
      {
      $result=$ob->account($email,$name,$mobile,$password1,$securityque,$securityans);
        if($result!=false){
          echo ("Data Stored successfully");
      //   $row=array();
      //   while($arr=$result->fetch_assoc()){
      //     $row[]=$arr;
      //   }
      //   print(json_encode($row));
      //   echo "Signed up successfully";
       }
        else{
          echo "false";
        }
      }
      else{
      echo "Details already exist";
       }
    }
  }

  if(isset($_POST['category']))
    {
      $arr="";
    	$category=$_POST['category'];
    	$link=$_POST['link'];
      $result=$pro->category($category,$link);
        $arr=$result;
        echo json_encode($arr);
      
    }
    if(isset($_GET['showproduct'])){
      $data=$pro->showproductbycategory();
      print_r(json_encode($data));
    }


    if(isset($_POST['update'])){
      $id=$_POST['id'];
      $name=$_POST['name'];
      $link=$_POST['link'];
      //echo $link;
      $result=$pro->update($id,$name,$link);
      if($result=='true'){
        echo json_encode("true");
      }else{
      echo json_encode("false");
      }
    }

    



















?>