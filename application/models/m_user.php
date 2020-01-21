<?php


 class M_user extends CI_Model
 {
 	
 	// function __construct(argument)
 	// {
 		
 	// }
 	public function user(){

 		$a = "select * from user";
 		$b = $this->db->query ($a);
 		return $b->result_array();
 	}
 	 	public function add_user( $user, $pass, $email, $userrole){

 		$sql = "insert into user (username, user_pas, email, user_role) values(? ,? ,? ,?)";  
 		$b = $this->db->query($sql, array($user, $pass, $email, $userrole));
 		return $this->db->affected_rows();
 	}
 	public function delete_user($id){

 		$sql = "delete from user where id_user = ?";
 		$b = $this->db->query($sql, array($id));
 		return $this->db->affected_rows();
 	}
 	public function get_selected_user($id){

 		$sql = "select * from user where id_user = ?";
 		$b = $this->db->query($sql, array($id));
 		return $b->result_array();
 	}
 	public function edit_user($id, $user, $pass, $email, $userrole){

 		$sql = "update user SET  username = ?, user_pas = ?, email = ?, user_role = ? where id_user = ?";  
 		$b = $this->db->query($sql, array($user, $pass, $email, $userrole, $id));
 		return $this->db->affected_rows();
 	}
 } 
 ?>