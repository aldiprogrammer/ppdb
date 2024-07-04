<?php 

	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$this->load->view('login/index');
		}

		function act_login(){

			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			$this->db->where('username', $username);
			$cekuser = $this->db->get('tbl_admin')->row_array();

			// var_dump($cekuser);
			// die();

			if($cekuser == true){

				if (password_verify($pass, $cekuser['password'])) {

					$data = [
						'username_admin' => $username,
						'role' => $cekuser['role'],
					];
					$this->session->set_userdata($data);

					redirect('admin/');
				}else{

					$this->session->set_flashdata('message', 'swal("Ops", "Password anda salah", "error" );');
					redirect('login');

				}
			}else{
				$this->session->set_flashdata('message', 'swal("Ops", "Akun anda tidak terdaftar", "error" );');
				redirect('login');
			}
		}

		function logout(){

			$this->session->unset_userdata('username_admin');
			$this->session->unset_userdata('role');
			
			redirect('login/');
		}

		


	}

?>