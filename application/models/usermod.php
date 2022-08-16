<?php 
class Usermod extends CI_Model
{
public function getinfo_acc()
{
	return $this->db->get("register")->result_array();
}

public function go_reg($name,$email,$mob,$pass)
{
	$a=array("name"=>$name,'email'=>$email,'mob'=>$mob,'pass'=>$pass);
	$this->db->insert("register",$a);
}

public function sell($book,$author,$price,$img,$des,$ss,$seller)
{
	$a=array("book"=>$book,'author'=>$author,'price'=>$price,'img'=>$img,'des'=>$des,'ss'=>$ss,'seller'=>$seller);
	$this->db->insert("stock",$a);
}
public function stock_info()
{
	return $this->db->get("stock")->result_array();
}

public function see($id)
{
	return $this->db->get_where("stock",array('id'=>$id))->result_array();
}

public function see_ss($id)
{
	return $this->db->get_where("register",array('id'=>$id))->result_array();
}
public function myadv($id)
{
	return $this->db->get_where("stock",array('seller'=>$id))->result_array();
}
public function update_item($id,$book,$author,$price,$img,$des,$ss,$seller)
{
	$a=array("book"=>$book,'author'=>$author,'price'=>$price,'img'=>$img,'des'=>$des,'ss'=>$ss,'seller'=>$seller);
	$this->db->update("stock",$a,array('id'=>$id));
}
public function del($id){
	$this->db->delete("stock",array('id'=>$id));

}

public function def()
{
	$this->db->order_by('id','DESC');
	return $this->db->get("stock")->result_array();
}

}
