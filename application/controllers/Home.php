<?php

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();

      $this->load->helpers('fungsi_helper');
        $this->load->model(['m_user']);
      //  $this->load->model(['m_absen']);
       
    }

	public function index(){
	$data['user'] = $this->m_user->user();
	$this->load->view('templete/header');
	$this->load->view('templete/navbar');
	$this->load->view('home', $data);
	$this->load->view('templete/footer');
	}


	public function add_user(){
	//$data['user'] = $this->m_user->user();
	$this->load->view('templete/header');
	$this->load->view('templete/navbar');
	$this->load->view('adduser');
	$this->load->view('templete/footer');
	}

	public function addproses(){
	if (isset($_POST['submit'])){
		$user = $_POST ['username'];
		$pass = md5($_POST ['user_pass']);
		$email = $_POST['email'];
		$userrole = $_POST['user_role'];

		$sql = $this->m_user->add_user($user, $pass, $email, $userrole);
		if ($sql == true){
			 redirect(base_url("home?msg=1"));


			}else {
			echo " Data Gagal Di Input";
			}
		}
	}
	public function edit_user($id){
	$data ['user']= $this->m_user->get_selected_user($id);
	$count = count($data['user']);
	if ($count != 0){
		$this->load->view('templete/header');
		$this->load->view('templete/navbar');
		$this->load->view('edit_user', $data);
		$this->load->view('templete/footer');
	}
	}
	public function editproses(){
	if (isset($_POST['submit'])){
		$id = $_POST ['id_user'];
		$user = $_POST ['username'];
		$pass = md5($_POST ['user_pass']);
		$email = $_POST['email'];
		$userrole = $_POST['user_role'];

		$sql = $this->m_user->edit_user($id, $user, $pass, $email, $userrole);
		if ($sql == true){
			 redirect(base_url("home"));


			}else {
			echo " Data Gagal Di Input";
			}
		}
	}

	public function delete_user($id){
	$sql = $this->m_user->delete_user($id);
	if ($sql == true){
			 redirect(base_url("home?msg=3"));


			}else {
			echo " Data Gagal Di Hapus";
			}
		}
	}



?>