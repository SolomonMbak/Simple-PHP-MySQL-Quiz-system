<?php
session_start();
class users{
	
	public $host = "127.0.0.1:3307";
	public $username = "root";
	public $pass = "";
	public $db_name = "quizdb";
	public $conn;
	public $data;
	public $cat;
	public $ques;
	

	
	
	public function __construct(){
		
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno){
			die ("database connection failed".$this->conn->connect_errno);
		}
	}
		public function signup($data){
			
			$this->conn->query($data);
		 	return true;
		}
			
			
		public function signin($email, $password){
			$query=$this->conn->query("SELECT email,password FROM signup WHERE email='".$email."' AND password='".$password."'");
			//$r= $query->fetch_array(MYSQLI_ASSOC);
			//print_r($query);die;
			//var_dump($query);die;
			if($query->num_rows>0){
				
				$_SESSION['email']=$email;
				return true;
			}else{
				return false;
			}
			
		}	
		
		public function users_profile($email){
			
			$query=$this->conn->query("select * from signup where email='$email'");
			$row=$query->fetch_array(MYSQLI_ASSOC);
			if($query->num_rows>0){
				
				$this->data[]=$row;
			}
			return $this->data;
		}
		
		public function cat_shows(){
			
			$query=$this->conn->query("select * from category");
			while($row=$query->fetch_array(MYSQLI_ASSOC)){
				
				$this->cat[]=$row;
			}
			return $this->cat;
			
		}
		
		public function ques_show($ques){
		
			//echo $ques;
			$query=$this->conn->query("select * from questions where cat_id='$ques'");
			while($row=$query->fetch_array(MYSQLI_ASSOC)){
				
				$this->ques[]=$row;
			}
			return $this->ques;
			
		}
		
		public function answr($data){
							
			$ans=implode("",$data);
			$right=0;
			$wrong=0;
			$no_answer=0;
			
			
			$query=$this->conn->query("select id,answer from questions where cat_id='".$_SESSION['cat']."'");
			while($quest=$query->fetch_array(MYSQLI_ASSOC)){
				//print_r($quest);
				if($quest['answer']==$_POST[$quest['id']]){
					$right++;
				}
				elseif($_POST[$quest['id']]=="no_attempt"){
					$no_answer++;
				}
				else{
					$wrong++;
				}
			
			}
			
/*			$array=array();
			$array['right']=$right;
			$array['wrong']=$wrong;
			$array['no_answer']=$no_answer;
			return $array;
			
	*/		echo "Right".$right."<br>";
			echo "No answer".$no_answer."<br>";
			echo "Wrong".$wrong."<br>";
		}
		
		public function url($url){
			header("location:".$url);
		}
		
}
?>