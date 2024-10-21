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

		function data_siswa(){
			$this->db->where('status', 1);
			$data['siswa'] = $this->db->get('tbl_siswa')->result_array();
			$data['user'] = $this->db->get('tbl_user')->result_array();
			$data['prov'] = $this->db->get('tbl_provinsi')->result_array();
			$data['kode'] = 'REG-'.rand(0, 100000);
			$this->load->view('template/header');
			$this->load->view('admin/data_siswa2', $data);
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

		function edit_siswa2(){

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


		function detail_siswa(){

			$kode = $this->input->get('kode');

			$this->db->where('kode_pendaftaran', $kode);
			$data['siswa'] = $this->db->get('tbl_siswa')->row_array();

			$this->db->where('kode_pendaftaran', $kode);
			$data['ortu'] = $this->db->get('tbl_ortu')->row_array();

			$this->db->where('kode_pendaftaran', $kode);
			$data['wali'] = $this->db->get('tbl_wali')->row_array();

			$this->db->where('kode_pendaftaran', $kode);
			$data['berkas'] = $this->db->get('tbl_berkas_siswa')->row_array();

			$this->db->where('kode_pendaftaran', $kode);
			$data['tf'] = $this->db->get('tbl_pembayaran')->row_array();


			$this->load->view('template/header');
			$this->load->view('admin/detail_siswa', $data);
			$this->load->view('template/footer');
		}


		function edit_siswa(){


			$kode = $this->input->get('kode');

			$this->db->where('kode_pendaftaran', $kode);
			$data['siswa'] = $this->db->get('tbl_siswa')->row_array();

			$this->db->where('kode_pendaftaran', $kode);
			$data['ortu'] = $this->db->get('tbl_ortu')->row_array();

			$this->db->where('kode_pendaftaran', $kode);
			$data['wali'] = $this->db->get('tbl_wali')->row_array();

			$this->db->where('kode_pendaftaran', $kode);
			$data['berkas'] = $this->db->get('tbl_berkas_siswa')->row_array();

			$this->db->where('kode_pendaftaran', $kode);
			$data['tf'] = $this->db->get('tbl_pembayaran')->row_array();

			$data['prov'] = $this->db->get('tbl_provinsi')->result_array();


			$this->load->view('template/header');
			$this->load->view('admin/edit_siswa', $data);
			$this->load->view('template/footer');


		}

		function tambah_siswa(){


		}


		function ubah_data_siswa(){

			$data = [

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


				// 'nama_ayah' => $this->input->post('nama_ayah'),
				// 'nama_ibu' => $this->input->post('nama_ibu'),
				// 'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				// 'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				// 'alamat_orang_tua' => $this->input->post('alamat_ortu'),
				// 'nama_wali' => $this->input->post('nama_wali'),
				// 'alamat_wali' => $this->input->post('alamat_wali'),
				// 'no_hp' => $this->input->post('no_hp'),
			];


			$this->db->where('kode_pendaftaran', $this->input->post('kode'));
			$this->db->update('tbl_siswa', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di ubah", "success" );');
			redirect("admin/edit_siswa?kode=".$this->input->post('kode'));
		}


		function ubah_data_ortu(){

			$data = [

				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'alamat_ortu' => $this->input->post('alamat_ortu'),
				'nohp_ortu' => $this->input->post('nohp'),
			];

			$this->db->where('kode_pendaftaran', $this->input->post('kode'));
			$this->db->update('tbl_ortu', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di ubah", "success" );');
			redirect("admin/edit_siswa?kode=".$this->input->post('kode'));
		}


		function ubah_data_wali(){
			$data = [

				'nama_wali' => $this->input->post('nama_wali'),
				'alamat_wali' => $this->input->post('alamat_wali'),
				'nohp_wali' => $this->input->post('nohp'),
			];

			$this->db->where('kode_pendaftaran', $this->input->post('kode'));
			$this->db->update('tbl_wali', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berasil di ubah", "success" );');
			redirect("admin/edit_siswa?kode=".$this->input->post('kode'));

		}


		function ubah_foto_siswa(){

			$kode = $this->input->post('kode');

			$config['upload_path']          = './assets/berkas';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;
			$config['encrypt_name'] 		= true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload("foto")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Foto gagal di upload", "error");');
				redirect('admin/edit_siswa?kode='.$kode);

			}else{

				$img = array('upload_data' => $this->upload->data());
				$new_name = $img['upload_data']['file_name'];
				$data = [
					'foto' => $new_name,
				];


				$this->db->where('kode_pendaftaran', $kode);
				$this->db->update('tbl_berkas_siswa', $data);
				$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di ubah", "success");');
				redirect('admin/edit_siswa?kode='.$kode);
			}

		}


		function ubah_kk_siswa(){

			$kode = $this->input->post('kode');

			$config['upload_path']          = './assets/berkas';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;
			$config['encrypt_name'] 		= true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload("kk")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Foto gagal di upload", "error");');
				redirect('admin/edit_siswa?kode='.$kode);

			}else{

				$img = array('upload_data' => $this->upload->data());
				$new_name = $img['upload_data']['file_name'];
				$data = [
					'kk' => $new_name,
				];


				$this->db->where('kode_pendaftaran', $kode);
				$this->db->update('tbl_berkas_siswa', $data);
				$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di ubah", "success");');
				redirect('admin/edit_siswa?kode='.$kode);
			}

		}

		function ubah_akte_siswa(){

			$kode = $this->input->post('kode');

			$config['upload_path']          = './assets/berkas';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;
			$config['encrypt_name'] 		= true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload("akte")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Foto gagal di upload", "error");');
				redirect('admin/edit_siswa?kode='.$kode);

			}else{

				$img = array('upload_data' => $this->upload->data());
				$new_name = $img['upload_data']['file_name'];
				$data = [
					'akte' => $new_name,
				];


				$this->db->where('kode_pendaftaran', $kode);
				$this->db->update('tbl_berkas_siswa', $data);
				$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di ubah", "success");');
				redirect('admin/edit_siswa?kode='.$kode);
			}

		}



		function tambah_siswa_baru(){
			$data['kode'] = 'REG-'.rand(0, 10000);
			$data['prov'] = $this->db->get('tbl_provinsi')->result_array();
			$this->load->view('template/header');
			$this->load->view('admin/tambah_siswa', $data);
			$this->load->view('template/footer');
		}


		function add_data_siswa(){

			$data = [
				'kode_user' => 'admin',
				'kode_pendaftaran' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'no_nik' => $this->input->post('no_nik'),
				'jk' => $this->input->post('jk'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat' => $this->input->post('alamat'),
				'agama' => $this->input->post('agama'),
				'prov' => $this->input->post('prov'),
				'kab' => $this->input->post('kab'),
				'kec' => $this->input->post('kec'),
				'kel' => $this->input->post('kel'),
				'kode_pos' => $this->input->post('kode_pos'),
			];

			$this->db->insert('tbl_siswa', $data);


			$data = [
				'kode_pendaftaran' => $this->input->post('kode'),
				'kode_user' => 'admin',
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'alamat_ortu' => $this->input->post('alamat_ortu'),
				'nohp_ortu' => $this->input->post('nohp'),
			];

			$this->db->insert('tbl_ortu', $data);


			$data = [
				'kode_pendaftaran' => $this->input->post('kode'),
				'kode_user' => 'admin',
				'nama_wali' => $this->input->post('nama_wali'),
				'alamat_wali' => $this->input->post('alamat_wali'),
				'nohp_wali' => $this->input->post('nohp'),
			];

			$this->db->insert('tbl_wali', $data);


			$config['upload_path']          = './assets/berkas';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;
			$config['encrypt_name'] 		= true;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload("foto")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Foto gagal di upload", "error");');
				redirect('admin/tambah_siswa_baru');

			}else{


				$img = array('upload_data' => $this->upload->data());
				$new_name1 = $img['upload_data']['file_name'];

			}

			if (!$this->upload->do_upload("kk")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Kartu keluarga gagal di upload", "error");');
				redirect('admin/tambah_siswa_baru');

			}else{


				$img = array('upload_data' => $this->upload->data());
				$new_name2 = $img['upload_data']['file_name'];

			}

			if (!$this->upload->do_upload("akte")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Akte gagal di upload", "error");');
				redirect('admin/tambah_siswa_baru');

			}else{


				$img = array('upload_data' => $this->upload->data());
				$new_name3 = $img['upload_data']['file_name'];


			}if (!$this->upload->do_upload("bukti")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Bukti gagal di upload", "error");');
				redirect('admin/tambah_siswa_baru');

			}else{

				$img = array('upload_data' => $this->upload->data());
				$new_name4 = $img['upload_data']['file_name'];
				

				$data = [

					'kode_pendaftaran' =>$this->input->post('kode'),
					'kode_user' =>  'admin',
					'foto' => $new_name1,
					'kk' => $new_name2,
					'akte' => $new_name3,
				];

				$this->db->insert('tbl_berkas_siswa', $data);

				$data = [

					'kode_pendaftaran' =>$this->input->post('kode'),
					'kode_user' =>  'admin',
					'bukti_pembayaran' => $new_name4,
				];

				$this->db->insert('tbl_pembayaran', $data);
			}


			$this->session->set_flashdata('message', 'swal("Yess", "Data siswa berhasil ditambah", "success" );');
			redirect('admin/tambah_siswa_baru');
		}

		function cetak_formulir(){

			$this->load->library('dompdf_gen');

			$kode = $this->input->get('kode');

			$data['siswa'] = $this->db->get_where('tbl_siswa', ['kode_pendaftaran' => $kode])->row_array();
			$data['ortu'] = $this->db->get_where('tbl_ortu', ['kode_pendaftaran' => $kode])->row_array();
			$data['wali'] = $this->db->get_where('tbl_wali', ['kode_pendaftaran' => $kode])->row_array();
			$data['berkas'] = $this->db->get_where('tbl_berkas_siswa', ['kode_pendaftaran' => $kode])->row_array();

			$this->load->view('admin/kartupendaftaran', $data);
			$paper_size = 'LEGAL';
			$orientation= 'potraid';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orientation);

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Kartu_pendaftaran.pdf", array('Attachment' =>0));
		}


		function provinsi(){
			$data['prov'] = $this->db->get('tbl_provinsi')->result_array();
			$this->load->view('template/header');
			$this->load->view('admin/data_provinsi', $data);
			$this->load->view('template/footer');
		}

		function add_prov(){

			$data = [
				'name' => $this->input->post('prov'),
			];

			$this->db->insert('tbl_provinsi', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data  berhasil ditambah", "success" );');
			redirect('admin/provinsi');
		}

		function hapus_prov(){

			$this->db->where('id', $this->input->post('id'));
			$this->db->delete('tbl_provinsi');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil dihapus", "success" );');
			redirect('admin/provinsi');
		}



		function edit_prov(){

			$data = [
				'name' => $this->input->post('prov'),
			];
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('tbl_provinsi', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data  berhasil diubah", "success" );');
			redirect('admin/provinsi');
		}

		function kabupaten(){

			$this->db->where('province_id', '12');
			$data['kab'] = $this->db->get('tbl_kabupaten')->result_array();

			$data['prov'] = $this->db->get('tbl_provinsi')->result_array();
			$this->load->view('template/header');
			$this->load->view('admin/data_kabupaten', $data);
			$this->load->view('template/footer');
		}

		function add_kab(){

			$data = [
				'province_id' => $this->input->post('prov'),
				'name' => $this->input->post('kab'),
			];

			$this->db->insert('tbl_kabupaten', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data  berhasil ditambah", "success" );');
			redirect('admin/kabupaten');
		}

		function hapus_kab(){

			$this->db->where('id', $this->input->post('id'));
			$this->db->delete('tbl_kabupaten');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil dihapus", "success" );');
			redirect('admin/kabupaten');
		}



		function edit_kab(){

			$data = [
				'name' => $this->input->post('kab'),
			];
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('tbl_kabupaten', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data  berhasil diubah", "success" );');
			redirect('admin/kabupaten');
		}

		function kecamatan(){


			$jmldata = $this->db->get('tbl_kecamatan')->num_rows();

			$this->load->library('pagination');
			$config['base_url'] = base_url().'admin/kecamatan/';
			$config['total_rows'] = $jmldata;
			$config['per_page'] = 20;
			$config['full_tag_open']    = '<ul class="pagination">';
			$config['full_tag_close']   = '</ul>';
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['first_tag_open']   = '<li class="page-item page-link">';
			$config['first_tag_close']  = '</li>';
			$config['prev_link']        = '&laquo';
			$config['prev_tag_open']    = '<li class="page-item page-link">';
			$config['prev_tag_close']   = '</li>';
			$config['next_link']        = '&raquo';
			$config['next_tag_open']    = '<li class="page-item page-link">';
			$config['next_tag_close']   = '</li>';
			$config['last_tag_open']    = '<li class="page-item page-link">';
			$config['last_tag_close']   = '</li>';
			$config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
			$config['cur_tag_close']    = '</a></li>';
			$config['num_tag_open']     = '<li class="page-item page-link">';
			$config['num_tag_close']    = '</li>';

			$from = $this->uri->segment(3);

			if($this->input->post('cari') == null){

				$this->pagination->initialize($config);		
				$data['kec'] = $this->db->get('tbl_kecamatan', $config['per_page'],$from)->result_array();

			}else{


				$this->pagination->initialize($config);	
				$this->db->where('name', $this->input->post('cari'));	
				$data['kec'] = $this->db->get('tbl_kecamatan', $config['per_page'],$from)->result_array();

			}

			$this->db->where('province_id', '12');
			$data['kab'] = $this->db->get('tbl_kabupaten')->result_array();

			$this->load->view('template/header');
			$this->load->view('admin/data_kecamatan', $data);
			$this->load->view('template/footer');
		}

		function add_kec(){

			$data = [
				'regency_id' => $this->input->post('kab'),
				'name' => $this->input->post('kec'),
			];

			$this->db->insert('tbl_kecamatan', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data  berhasil ditambah", "success" );');
			redirect('admin/kecamatan');
		}

		function hapus_kec(){

			$this->db->where('id', $this->input->post('id'));
			$this->db->delete('tbl_kecamatan');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil dihapus", "success" );');
			redirect('admin/kecamatan');
		}



		function edit_kec(){

			$data = [
				'name' => $this->input->post('kec'),
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('tbl_kecamatan', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data  berhasil diubah", "success" );');
			redirect('admin/kecamatan');
		}

		function kelurahan(){
			$jmldata = $this->db->get('tbl_kelurahan')->num_rows();

			$this->load->library('pagination');
			$config['base_url'] = base_url().'admin/kelurahan/';
			$config['total_rows'] = $jmldata;
			$config['per_page'] = 20;
			$config['full_tag_open']    = '<ul class="pagination">';
			$config['full_tag_close']   = '</ul>';
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['first_tag_open']   = '<li class="page-item page-link">';
			$config['first_tag_close']  = '</li>';
			$config['prev_link']        = '&laquo';
			$config['prev_tag_open']    = '<li class="page-item page-link">';
			$config['prev_tag_close']   = '</li>';
			$config['next_link']        = '&raquo';
			$config['next_tag_open']    = '<li class="page-item page-link">';
			$config['next_tag_close']   = '</li>';
			$config['last_tag_open']    = '<li class="page-item page-link">';
			$config['last_tag_close']   = '</li>';
			$config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
			$config['cur_tag_close']    = '</a></li>';
			$config['num_tag_open']     = '<li class="page-item page-link">';
			$config['num_tag_close']    = '</li>';

			$from = $this->uri->segment(3);

			if($this->input->post('cari') == null){

				$this->pagination->initialize($config);		
				// $this->db->limit(100);
				$data['kel'] = $this->db->get('tbl_kelurahan', $config['per_page'],$from)->result_array();

			}else{


				$this->pagination->initialize($config);	

				// $this->db->limit(100);
				$this->db->where('name', $this->input->post('cari'));	
				$data['kel'] = $this->db->get('tbl_kelurahan', $config['per_page'],$from)->result_array();

			}


			$data['kec'] = $this->db->get('tbl_kecamatan')->result_array();

			$this->load->view('template/header');
			$this->load->view('admin/data_kelurahan', $data);
			$this->load->view('template/footer');
		}


		function add_kel(){

			$data = [
				'district_id' => $this->input->post('kec'),
				'name' => $this->input->post('kel'),
			];

			$this->db->insert('tbl_kelurahan', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data  berhasil ditambah", "success" );');
			redirect('admin/kelurahan');
		}

		function hapus_kel(){

			$this->db->where('id', $this->input->post('id'));
			$this->db->delete('tbl_kelurahan');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil dihapus", "success" );');
			redirect('admin/kelurahan');
		}

		function edit_kel(){

			$data = [
				'name' => $this->input->post('kel'),
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('tbl_kelurahan', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data  berhasil diubah", "success" );');
			redirect('admin/kelurahan');
		}
	}

?>