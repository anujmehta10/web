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
      if($data!=false){
        print_r(json_encode($data));
      }
    }
    
    
    if(isset($_POST['manageproductbycategory'])){
      $id=$_POST['id'];
      $action=$_POST['action'];
      $result=$pro->manageproductbycategory($id,$action);
      if($result=='true'){
        echo json_encode("true");
      }
      else if($result=='false'){
        echo json_encode("false");
      }else{
      echo json_encode($result);
      }
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

      if(isset($_POST['newpro'])){
        $cat=$_POST['cat'];
        $pro_name=$_POST['pro_name'];
        $url=$_POST['url'];
        $m_price=$_POST['m_price'];
        $a_price=$_POST['a_price'];
        $sku=$_POST['sku'];
        $webs=$_POST['webs'];
        $band=$_POST['band'];
        $domain=$_POST['domain'];
        $language=$_POST['language'];
        $mail=$_POST['mail'];
        $description=array(
          "webspace"=>$webs,
          "bandwidth"=>$band,
          "domain"=>$domain,
          "lang"=>$language,
          "mail"=>$mail,
        );
        $description=json_encode($description);
        $result=$pro->addpro($cat,$pro_name,$url,$description,$m_price,$a_price,$sku);
        $arr=$result;
        echo json_encode($arr);
        // echo $cat;
      }




      if(isset($_GET['viewproduct'])){
        $data=$pro->viewproduct();
        if($data!=false){
          print_r(json_encode($data));
        }
      }

      if(isset($_POST['action'])){
        if($_POST['action'] == "edit") {
          $id=$_POST['id'];
          $result=$pro->editproductdata($id);
          $fetch_category=$pro->nav();
          $alldata=array('product'=>$result, 'category'=>$fetch_category);
          // if($result=='true'){
          //   echo json_encode("true");
          // }
          // else if($result=='false'){
          //   echo json_encode("false");
          // }else{
           echo json_encode($alldata);
          // }
        }
        // }
        if($_POST['action']=="del"){
          $id=$_POST['id'];
          $result=$pro->delproductdata($id);
          if($result=='true'){
            echo "true";
          }
          else if($result=='false'){
            echo "false";
          }
        }
      }




      if(isset($_POST['act'])){ 
        if($_POST['act'] == "edit"){
          $id=$_POST['id'];
          // echo "id";
          $result=$pro->editproductbycategory($id);
          echo json_encode($result);
      }
  
        if($_POST['act'] == "delete"){
          $id=$_POST['id'];
          $result=$pro->deleteproductbycategory($id);
            if($result=='true'){
              echo "true";
            }
            else if($result=='false'){
              echo "false";
            }
        }
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
      if(isset($_POST['updateviewproduct'])){
        $id=$_POST['id'];
        $prod_name=$_POST['prod_name'];
        $link=$_POST['link'];
        $mon_price=$_POST['mon_price'];
        $annual_price=$_POST['annual_price'];
        $sku=$_POST['sku'];
        $webs=$_POST['webspace'];
        $band=$_POST['band'];
        $domain=$_POST['domain'];
        $lang=$_POST['lang'];
        $mail=$_POST['mail'];
        //echo $link;
        $description=array(
          "webspace"=>$webs,
          "bandwidth"=>$band,
          "domain"=>$domain,
          "lang"=>$lang,
          "mail"=>$mail,
        );
        $description=json_encode($description);
        $result=$pro->updateviewproduct($id,$prod_name,$link,$description,$mon_price,$annual_price,$sku);
        if($result=='true'){
          echo json_encode("true");
        }else{
        echo json_encode("false");
        }
      }












?>