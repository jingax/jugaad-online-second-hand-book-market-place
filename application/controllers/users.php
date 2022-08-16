<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller
{
public function __construct()
{
	Parent::__construct();
	
	$this->load->database();
	$this->load->Model("usermod");
	$this->load->helper("form");
	$this->load->helper("url");
	$this->load->library("session");
	
}


public function index()
{
	//$this->load->view("configure");
	$this->load->view("head");
	
		$this->load->view("first");
	
	
}
public function term()
{
	//$this->load->view("configure");
	$this->load->view("head");
	
		$this->load->view("privacy");
	
	
}
public function about()
{
	//$this->load->view("configure");
	$this->load->view("head");
	
		$this->load->view("about");
	
	
}

public function register()
{ 
$d=$this->session->get_userdata();
if(!isset($d['id'])){
$flag=0;
	$data["msg"]="";
	extract($_POST);
	if(isset($submit)){
		$da=$this->usermod->getinfo_acc();
		foreach($da as $v)
		{
			if($v['email']==$email)
			{$data["msg"]="Account with this email already exists";
			 $flag=1;}
		}	
			if(!$flag){$this->usermod->go_reg($name,$email,$mob,$pass);
			$this->load->view("login");}
	}
	
		
	
	$this->load->view("head");
	$this->load->view("register",$data);
}
else
	$this->index();
	
}

public function login()
{$dddd=$this->session->get_userdata();
if(!isset($dddd['id'])){
	
	$data["msg"]="";
	//$this->load->view("configure");
	extract($_POST);
	if(isset($submit)){
		$da=$this->usermod->getinfo_acc();
		foreach($da as $v)
		{
			if($v['email']==$email && $v['pass']==$pass)
			{
				$this->session->set_userdata(array('id'=>$v['id'],'name'=>$v['name']));
				redirect("users/index");
			}
		}
	$data["msg"]="Username or password wrong!";
	}		
	$this->load->view("head");
	$this->load->view("login",$data);
}
else
	$this->index();
}
public function sell()
{
	$flag=1;
	$dddd=$this->session->get_userdata();
if(isset($dddd['id'])){
	//$this->load->view("configure");
	extract($_POST);
	if(isset($submit)){
	$dt=$this->session->get_userdata();
	$config['upload_path']="assets/images/";
	$config['allowed_types']="jpg|png|gif";
	$this->load->library("Upload",$config);
	//echo $imgx;
	if(!$this->upload->do_upload('img'))
	{
		$this->usermod->sell($book,$author,$price,"alt.jpg",$des,1,$dt['id']);
		$flag=0;
		$this->my_add($dddd['id']);//update this Update Done bc
	}
	else
	{
		$d=$this->upload->data();
	    $img2=$d["file_name"];
		
		
		//print_r($da);
		$this->usermod->sell($book,$author,$price,$img2,$des,1,$dt['id']);
		$flag=0;
		$this->my_add($dddd['id']);
	}
	
		
	}
	
	if($flag){$this->load->view("head");
	$this->load->view("sell");}
}
else 
	$this->login();
}

public function logout(){
	$this->session->unset_userdata('id','name');
	redirect("users/index");
}

public function listing()
{	
	$this->load->view("head");
	$this->load->view("list");
	
	
}
public function see($id){
/*	$data['ele']=$this->usermod->see($id);
	$da=$this->usermod->see($id);
	$data['sell']=$this->usermod->see_ss($da[0]['seller']); */
	$this->load->view("head");
	$this->load->view("see");
}

public function my_add($id){
	$dddd=$this->session->get_userdata();
if(isset($dddd['id'])){
	$data['ele']=$this->usermod->myadv($id);
	$this->load->view("head");
	$this->load->view("myadd",$data);
}
else $this->login();
}

public function see_my($id){
	$dddd=$this->session->get_userdata();
	if(isset($dddd['id'])){
	$data['ele']=$this->usermod->see($id);
	$this->load->view("head");
	$this->load->view("seemy",$data);
	}
	else $this->login();
}
public function edit($id){
	$dddd=$this->session->get_userdata();
	if(isset($dddd['id'])){
	$data['ele']=$this->usermod->see($id);
	$this->load->view("head");
	$this->load->view("edit",$data);}
	else $this->login();
	
}
public function update_item()
{
	$dddd=$this->session->get_userdata();
	if(isset($dddd['id'])){
	//$this->load->view("configure");
	extract($_POST);
	if(isset($submit)){
	$dt=$this->session->get_userdata();
	$config['upload_path']="assets/images/";
	$config['allowed_types']="jpg|png|gif";
	$this->load->library("Upload",$config);
	//echo $imgx;
	if(!$this->upload->do_upload('img'))
	{
		$this->usermod->update_item($id,$book,$author,$price,$file,$des,1,$dt['id']);  //update this
	}
	else
	{
		$d=$this->upload->data();
	    $img2=$d["file_name"];
		
		
		//print_r($da);
		$this->usermod->update_item($id,$book,$author,$price,$img2,$des,1,$dt['id']);
		if($file!="alt.jpg")
		unlink("assets/images/".$file);
		//redirect("users/elink");
	}
	
	
		
	}
	
	$this->load->view("head");
	$data['ele']=$this->usermod->myadv($dt['id']);
	$this->load->view("myadd",$data);
	}
	else $this->login();
	
}
public function del($id){
	$dddd=$this->session->get_userdata();
	if(isset($dddd['id'])){
	$da=$this->usermod->see($id);
	if(!($da[0]['img']=="alt.jpg"))   //  see if problem 
	unlink("assets/images/".$da[0]['img']);
	$this->usermod->del($id);
	$this->load->view("head");
	$data['ele']=$this->usermod->myadv($da[0]['seller']);
	$this->load->view("myadd",$data);
}
else $this->login();
}

} 



?>