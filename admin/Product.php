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
        $sql="INSERT INTO `tbl_product`(`prod_parent_id`,`prod_name`,`link`,`prod_available`,`prod_launch_date`)VALUES('1','$category','$link','0',NOW())";
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
                $arr['data'][]=array($row['id'],$row['prod_parent_id'],$row['prod_name'],$row['link'],
                $available,$row['prod_launch_date'],"<a href='javascript:void(0)' class='btn btn-outline-info'
                data-id='".$row['id']."' id='edit-product-by-category' data-toggle='modal' data-target='#exampleModal'>Edit</a> <a href='javascript:void(0)' 
                class='btn btn-outline-danger' data-id='".$row['id']."' id='delete-product-by-category'>DELETE
                </a>");
            }
            return $arr;
        }
        return false;


    }


    public function manageproductbycategory($id,$action){
        if($action=='edit'){
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
        if($action=='delete'){
            $db=new DB_con();
            $sql="DELETE FROM `tbl_product` WHERE `id`='$id'";
            $result=$db->conn->query($sql);
            if ($result === TRUE) {
                return "true";
              } else {
                return "false";
              }
        }
    }
    public function update($id,$name,$link){
        $db=new DB_con();
        $return="";
        $sql="UPDATE `tbl_product` SET `prod_name`='$name', `link`='$link' WHERE `id`='$id'";
        if ($db->conn->query($sql) == true)
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
























}
?>