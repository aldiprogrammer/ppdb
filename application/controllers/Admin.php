<?php 

	/**
	 * 
	 */
	class Admin extends CI_controller
	{
		
		function __construct()
		{
			parent::__construct();

			if($this->session->username_admin == ''){
				redirect('login/');
			}
		}


		function index(){

			$data['siswa'] = $this->db->get('tbl_siswa')->num_rows();
			$data['admin'] = $this->db->get('tbl_admin')->num_rows();
			$data['user'] = $this->db->get('tbl_user')->num_rows();


			$this->load->view('template/header');
			$this->load->view('admin/index', $data);
			$this->load->view('template/footer');
		}

		function data_user(){

			$this->db->order_by('id', 'desc');
			$data['user'] = $this->db->get('tbl_user')->result_array();
			$this->load->view('template/header');
			$this->load->view('admin/data_user', $data);
			$this->load->view('template/footer');

		}

		function hapus_user(){

			$id = $this->input->post("id");
			$this->db->where('id', $id);
			$this->db->delete('tbl_user');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di hapus", "success" );');
			redirect('admin/data_user');

		}

		function edit_user(){

			$id = $this->input->post("id");
			$username = $this->input->post("username");
			$email = $this->input->post("email");

			$data = [
				'username' => $username,
				'email' => $email,
			];

			$this->db->where('id', $id);
			$this->db->update('tbl_user', $data);

			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di ubah", "success" );');
			redirect('admin/data_user');


		}


		function data_role(){

			$this->db->order_by('id', 'desc');
			$data['role'] = $this->db->get('tbl_role')->result_array();
			$data['kode'] = 'RL-'.rand(0, 1000000);
			$this->load->view('template/header');
			$this->load->view('admin/data_role', $data);
			$this->load->view('template/footer');
		}

		function add_role(){

			$kode = $this->input->post("kode");
			$role = $this->input->post("role");

			$data = [
				'kode_role' => $kode,
				'role' => $role,
			];

			$this->db->insert('tbl_role', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di tambah", "success" );');
			redirect('admin/data_role');

		}

		function hapus_role(){

			$id = $this->input->post("id");
			$this->db->where('id', $id);
			$this->db->delete('tbl_role');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di hapus", "success" );');
			redirect('admin/data_role');

		}

		function edit_role(){

			$id = $this->input->post("id");
			$kode = $this->input->post("kode");
			$role = $this->input->post("role");

			$data = [
				'kode_role' => $kode,
				'role' => $role,
			];

			$this->db->where('id', $id);
			$this->db->update('tbl_role', $data);

			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di ubah", "success" );');
			redirect('admin/data_role');


		}


		function data_admin(){

			$this->db->order_by('id', 'desc');
			$data['admin'] = $this->db->get('tbl_admin')->result_array();
			$data['kode'] = 'AD-'.rand(0, 1000000);
			$data['role'] = $this->db->get('tbl_role')->result_array();
			$this->load->view('template/header');
			$this->load->view('admin/data_admin', $data);
			$this->load->view('template/footer');
		}

		function add_admin(){

			$kode = $this->input->post("kode");
			$role = $this->input->post("role");
			$username = $this->input->post("username");
			$password = $this->input->post("password");

			$data = [
				'kode_admin' => $kode,
				'role' => $role,
				'username' => $username,
				'password' => password_hash($password, PASSWORD_DEFAULT),
			];

			$this->db->insert('tbl_admin', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di tambah", "success" );');
			redirect('admin/data_admin');

		}

		function hapus_admin(){

			$id = $this->input->post("id");
			$this->db->where('id', $id);
			$this->db->delete('tbl_admin');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di hapus", "success" );');
			redirect('admin/data_admin');

		}

		function edit_admin(){

			$id = $this->input->post('id');
			$kode = $this->input->post("kode");
			$role = $this->input->post("role");
			$username = $this->input->post("username");
			$password = $this->input->post("password");

			$data = [
				'kode_admin' => $kode,
				'role' => $role,
				'username' => $username,
				'password' => password_hash($password, PASSWORD_DEFAULT),
			];

			$this->db->where('id', $id);
			$this->db->update('tbl_admin', $data);

			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di ubah", "success" );');
			redirect('admin/data_admin');


		}


		function calon_siswa(){

			$data['siswa'] = $this->db->get('tbl_siswa')->result_array();
			$data['user'] = $this->db->get('tbl_user')->result_array();
			$data['prov'] = $this->db->get('tbl_provinsi')->result_array();
			$data['kode'] = 'REG-'.rand(0, 100000);
			$this->load->view('template/header');
			$this->load->view('admin/data_siswa', $data);
			$this->load->view('template/footer');
		}

		function get_kab(){
			$id = $this->input->get('id');
			$this->db->where('province_id', $id);
			$data['kab'] = $this->db->get('tbl_kabupaten')->result_array();

			$this->load->view('admin/kab', $data);
		}

		function get_kec(){
			$id = $this->input->get('id');
			$this->db->where('regency_id', $id);
			$data['kec'] = $this->db->get('tbl_kecamatan')->result_array();

			$this->load->view('admin/kac', $data);
		}

		function get_kel(){
			$id = $this->input->get('id');
			$this->db->where('district_id', $id);
			$data['kel'] = $this->db->get('tbl_kelurahan')->result_array();

			$this->load->view('admin/kel', $data);
		}


		function add_siswa(){

			$data = [

				'kode_pendaftaran' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_nik' => $this->input->post('no_nik'),
				'alamat' => $this->input->post('alamat'),
				'kab' => $this->input->post('kab'),
				'prov' => $this->input->post('prov'),
				'kec' => $this->input->post('kec'),
				'kel' => $this->input->post('kel'),
				'kode_pos' => $this->input->post('kode_pos'),
				'agama' => $this->input->post('agama'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'alamat_orang_tua' => $this->input->post('alamat_ortu'),
				'nama_wali' => $this->input->post('nama_wali'),
				'alamat_wali' => $this->input->post('alamat_wali'),
				'no_hp' => $this->input->post('no_hp'),
			];


			$this->db->insert('tbl_siswa', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di tambah", "success" );');
			redirect('admin/calon_siswa');
		}


		function hapus_siswa(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_siswa');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di hapus", "success" );');
			redirect('admin/calon_siswa');
		}

		function edit_siswa(){

			$data = [

				'kode_pendaftaran' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_nik' => $this->input->post('no_nik'),
				'alamat' => $this->input->post('alamat'),
				'kab' => $this->input->post('kab'),
				'prov' => $this->input->post('prov'),
				'kec' => $this->input->post('kec'),
				'kel' => $this->input->post('kel'),
				'kode_pos' => $this->input->post('kode_pos'),
				'agama' => $this->input->post('agama'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'alamat_orang_tua' => $this->input->post('alamat_ortu'),
				'nama_wali' => $this->input->post('nama_wali'),
				'alamat_wali' => $this->input->post('alamat_wali'),
				'no_hp' => $this->input->post('no_hp'),
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('tbl_siswa', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di ubah", "success" );');
			redirect('admin/calon_siswa');
		}


		function update_status(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$cek = $this->db->get('tbl_siswa')->row_array();

			if($cek['status'] == 0){

				$this->db->where('id', $id);
				$this->db->update('tbl_siswa', ['status' => 1]);
			}else{

				$this->db->where('id', $id);
				$this->db->update('tbl_siswa', ['status' => o]);
			}

			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di update", "success" );');
			redirect('admin/calon_siswa');
		}
	}
	
?>