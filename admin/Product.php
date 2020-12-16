<?php include_once('config.php');
$db=new DB_con();
class Product
{
    public function extract(){
        $db=new DB_con();
        $sql="SELECT * FROM `tbl_product` WHERE `id`='1' AND `prod_parent_id`='0'";
        $result=$db->conn->query($sql);
            return $result;
    }
    public function category($category,$link){
        $db=new DB_con();
        $return="";
        $sql="INSERT INTO `tbl_product`(`prod_parent_id`,`prod_name`,`html`,`prod_available`,`prod_launch_date`)VALUES('1','$category','$link','0',NOW())";
        if ($db->conn->query($sql) === TRUE) {
            $return= "New record created successfully";
          } else {
            $return= "Error: " . $sql . "<br>" . $conn->error;
          }
          return $return;
    }
    public function showproductbycategory(){
        $db=new DB_con();
        $sql="SELECT * FROM `tbl_product` WHERE `prod_parent_id`='1' AND `id` NOT IN (SELECT MIN(`id`) FROM `tbl_product`)";
        $data=$db->conn->query($sql);
        if($data->num_rows>0){
            $arr['data']=array();
            while($row=$data->fetch_assoc()){
                if($row['prod_available']=='1'){
                    $available="available";
                }
                else{
                    $available="unavailable";
                }
                $arr['data'][]=array($row['id'],$row['prod_parent_id'],$row['prod_name'],$row['html'],
                $available,$row['prod_launch_date'],"<a href='javascript:void(0)' class='btn btn-outline-info'
                data-id='".$row['id']."' id='edit-product-by-category' data-toggle='modal' data-target='#exampleModal'>Edit</a> <a href='javascript:void(0)' 
                class='btn btn-outline-danger' data-id='".$row['id']."' id='delete-product-by-category'>DELETE
                </a>");
            }
            return $arr;
        }
        
        return false;


    }


    public function editproductbycategory($id){
        // echo "function";
        $db=new DB_con(); 
        $value = array();
        $sql="SELECT * FROM `tbl_product` WHERE `id`='$id'";
        $data=$db->conn->query($sql);
        
        if($data->num_rows>0){
            while($row=$data->fetch_assoc()){
                $value[] = $row;
            }
        }
        return $value;
    }


    
    public function deleteproductbycategory($id){
       
            $db=new DB_con();
            $sql="DELETE FROM `tbl_product` WHERE `id`='$id'";
            $result=$db->conn->query($sql);
            if ($result === TRUE) {
                return "true";
              } else {
                return "false";
              }
    }
    public function update($id,$name,$link){
        $db=new DB_con();
        $return="";
        $sql="UPDATE `tbl_product` SET `prod_name`='$name', `html`='$link' WHERE `id`='$id'";
        if ($db->conn->query($sql) == TRUE)
        {
           $return = "true";
        }
         else
        {
            $return = "false";
        }
         return $return;
    }
    
    public function nav(){
        $db=new DB_con();
        $sql="SELECT * FROM `tbl_product` WHERE `prod_parent_id`='1'";
        $data=$db->conn->query($sql);
        if($data->num_rows>0){
            $arr=array();
            while($row=$data->fetch_assoc()){
                $arr[]=$row;
            }
            return $arr;
        }
    }

    public function addpro($cat,$pro_name,$url,$description,$m_price,$a_price,$sku){
        $db=new DB_con();
        $insert="INSERT INTO `tbl_product`(`prod_parent_id`,`prod_name`,`html`,`prod_available`,`prod_launch_date`) VALUES 
        ('$cat','$pro_name','$url','0',NOW())";
        if ($db->conn->query($insert) === TRUE) {
            $last_id=$db->conn->insert_id;
            $insert1="INSERT INTO tbl_product_description(`prod_id`,`description`,`mon_price`,`annual_price`,`sku`) VALUES('$last_id',
            '$description','$m_price','$a_price','$sku')";
            if ($db->conn->query($insert1) === TRUE) {
                $return= "New record created successfully";
                }
             }  else {
            $return= "Error: " . $sql . "<br>" . $conn->error;
          }
          return $return;
    }
        
    public function viewproduct(){
        $db=new DB_con();
        $arr = array();
        $sql="SELECT * FROM tbl_product INNER JOIN tbl_product_description ON tbl_product.id = tbl_product_description.prod_id";
        $data=$db->conn->query($sql);
        if($data->num_rows>0){
            while($row=$data->fetch_assoc()){
                if($row['prod_available']=='1'){
                    $available="available";
                }
                else{
                    $available="unavailable";
                }
                $description=json_decode($row['description']);
                $webs=$description->webspace;
                $band=$description->bandwidth;
                $domain=$description->domain;
                $language=$description->{'lang'};
                $mail=$description->{'mail'};
                $arr['data'][]=array($row['prod_parent_id'],$row['prod_name'],$row['html'],$row['mon_price'],
                $row['annual_price'],$row['sku'],$available,$row['prod_launch_date'],$webs,$band,$domain,$language,$mail,"<a href='javascript:void(0)' class='btn btn-outline-info'
                data-id='".$row['prod_id']."' id='vieweditproduct' data-toggle='modal' data-target='#exampleModal'>Edit</a> <a href='javascript:void(0)' 
                class='btn btn-outline-danger' data-id='".$row['prod_id']."' id='viewdelproduct'>DELETE
                </a>"); 
            }
            return $arr;
        }
   
    }

    public function editproductdata($id){
            $db=new DB_con(); 
            $value = array();
            // echo $id;
            $sql="SELECT * FROM tbl_product INNER JOIN tbl_product_description ON tbl_product.id = tbl_product_description.prod_id WHERE `prod_id`='$id'";
            // $sql="SELECT * FROM `tbl_product` WHERE `id`='$id'";
            $data=$db->conn->query($sql);
            if($data->num_rows>0){
                while($row=$data->fetch_assoc()){
                    $value[] = $row;
                }
            }
            $value = $value[0];
            $value['description'] = json_decode($value['description']);
            return $value;
    }


    public function delproductdata($id){
        $db=new DB_con();
        $return="";
        $sql="DELETE FROM `tbl_product` WHERE `id`='$id'";
        $sqli="DELETE FROM `tbl_product_description` WHERE `prod_id`='$id'";
        if ($db->conn->query($sql) == true && $db->conn->query($sqli) == TRUE)
        {
            $return = "true";
        }
         else
        {
            $return = "false";
        }
         return $return;
    }

    public function updateviewproduct($id,$prod_name,$link,$description,$mon_price,$annual_price,$sku){
        $db=new DB_con();
        $return="";
        $sql="UPDATE `tbl_product` SET `prod_name`='$prod_name', `html`='$link' WHERE `id`='$id'";
        $sqldesc="UPDATE `tbl_product_description` SET `description`='$description', `mon_price`='$mon_price', `annual_price`='$annual_price', `sku`='$sku' WHERE `prod_id`='$id'";
        if ($db->conn->query($sql) == true && $db->conn->query($sqldesc) == true)
        {
            $return = "true";
        }
         else
        {
            $return = "false";
        }
         return $return;

    }
    public function getpageheading($id){
        $db=new DB_con();
        $return="";
        $sql="SELECT * FROM `tbl_product` WHERE `id`='$id'";
        $data=$db->conn->query($sql);
        if($data->num_rows>0){
            while($row=$data->fetch_assoc()){
            return $row;
            }
        }
    }

    public function getcatpagedata($id){
        $db=new DB_con(); 
        // echo $id;
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* FROM
         tbl_product JOIN tbl_product_description ON `tbl_product`.`id` =
          `tbl_product_description`.`prod_id` WHERE `tbl_product`.`prod_parent_id`='$id'";
        // $sql="SELECT * FROM `tbl_product` WHERE `id`='$id'";
        $data=$db->conn->query($sql);
        if($data->num_rows>0) {
            $arr=array();
            while($row=$data->fetch_assoc()){
                if($row['prod_available']=='0'){
                    continue;
                }else{
                    $available="available";
                }
                $decoded_description=json_decode($row['description']);
                $webspace=$decoded_description->{'webspace'};
                $bandwidth=$decoded_description->{'bandwidth'};
                $domain=$decoded_description->{'domain'};
                $language=$decoded_description->{'lang'};
                $mailbox=$decoded_description->{'mail'};
                $arr[]=array(
                    "prod_id"=>$row['prod_id'],
                    "sku"=>$row['sku'],
                    "mon_price"=>$row['mon_price'],
                    "annual_price"=>$row['annual_price'],
                    "prod_parent_id"=>$row['prod_parent_id'],
                    "prod_name"=>$row['prod_name'],
                    "link"=>$row['html'],
                    "available"=>$available,
                    "prod_launch_date"=>$row['prod_launch_date'],
                    "webspace"=>$webspace,
                    "bandwidth"=>$bandwidth,
                    "domain"=>$domain,
                    "language"=>$language,
                    "mailbox"=>$mailbox
                );
            }
            return $arr;
        }
        return false;
    }
    




















}
?>