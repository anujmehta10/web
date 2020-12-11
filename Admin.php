<?php include('config.php');
$db=new DB_con();
class product
{
    public function extract(){
        $db=new DB_conn();
        $sql="SELECT * FROM `tbl_product` WHERE `id`='1' AND `prod_parent_id`='1'";
        $result=$db->conn->query($sql);
        if($result->num_rows>0){
            return $result;
        }
        return false;
    }
}
