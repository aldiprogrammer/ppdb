<?php 

	/**
	 * 
	 */
	class App extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}



		function index(){

			$this->load->view('template2/header');
			$this->load->view('app/index');
			$this->load->view('template2/footer');

		}


		function login(){


			$this->load->view('template2/header');
			$this->load->view('app/login');
			$this->load->view('template2/footer');
		}

		function ppdb(){


			$this->db->where('kode_user', $this->session->kode_user);
			$berkas = $this->db->get('tbl_berkas_siswa')->row_array();

			if($berkas == false){

				$data['berkas'] = 'false';
			}else{

				$this->db->where('kode_user', $this->session->kode_user);
				$data['berkas'] = $this->db->get('tbl_berkas_siswa')->row_array();
			}

			$this->db->where('kode_user', $this->session->kode_user);
			$data['bayar'] = $this->db->get('tbl_pembayaran')->row_array();

			$this->db->where('kode_user', $this->session->kode_user);
			$data['siswa'] = $this->db->get('tbl_siswa')->row_array();

			$data['prov'] = $this->db->get('tbl_provinsi')->result_array();

			$this->load->view('template2/header');
			$this->load->view('app/ppdb', $data);
			$this->load->view('template2/footer');
		}

		function add_slide1(){

			$data = [
				'kode_user' => $this->session->kode_user,
				'kode_pendaftaran' => 'REG-'.rand(0, 1000000),
				'nama' => $this->input->post('nama'),
				'no_nik' => $this->input->post('nik'),
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
			$this->session->set_flashdata('message', 'swal("Yess", "Profil anda berhasil di input", "success" );');
			redirect('app/ppdb?slide=2');

		}


		function add_slide2(){

			$data = [
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'alamat_orang_tua' => $this->input->post('alamat_orang_tua'),
				'nama_wali' => $this->input->post('nama_wali'),
				'alamat_wali' => $this->input->post('alamat_wali'),
				'no_hp' => $this->input->post('no_hp'),
			];

			$this->db->where('kode_user', $this->session->kode_user);
			$this->db->update('tbl_siswa', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Profil orang tua berhasil di input", "success" );');
			redirect('app/ppdb?slide=3');
		}



		function add_foto(){

			$this->db->where('kode_user', $this->session->kode_user);
			$cek = $this->db->get('tbl_siswa')->row_array();
			$kode_daftar  = $cek['kode_pendaftaran'];

			$this->db->where('kode_user', $this->session->kode_user);
			$cek2 = $this->db->get('tbl_berkas_siswa')->row_array();


			$config['upload_path']          = './assets/berkas';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;
			$config['encrypt_name'] 		= true;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload("foto")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Foto gagal di upload", "error");');
				redirect('app/ppdb?slide=3');

			}else{

				$img = array('upload_data' => $this->upload->data());
				$new_name = $img['upload_data']['file_name'];

				$data = [

					
					'kode_pendaftaran' => $kode_daftar,
					'kode_user' => $this->session->kode_user,
					'foto' => $new_name,
				];

				if($cek2 == false){

					$this->db->insert('tbl_berkas_siswa', $data);
					$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di tambah", "success");');
				}else{

					$this->db->where('kode_user', $this->session->kode_user);
					$this->db->update('tbl_berkas_siswa', $data);
					$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di tambah", "success");');
				}

				redirect('app/ppdb?slide=3');
				

			}
		}


		function add_kk(){


			$this->db->where('kode_user', $this->session->kode_user);
			$cek = $this->db->get('tbl_siswa')->row_array();
			$kode_daftar  = $cek['kode_pendaftaran'];

			$this->db->where('kode_user', $this->session->kode_user);
			$cek2 = $this->db->get('tbl_berkas_siswa')->row_array();


			$config['upload_path']          = './assets/berkas';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;
			$config['encrypt_name'] 		= true;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload("kk")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Foto gagal di upload", "error");');
				redirect('app/ppdb?slide=3');

			}else{

				$img = array('upload_data' => $this->upload->data());
				$new_name = $img['upload_data']['file_name'];

				$data = [

					
					'kode_pendaftaran' => $kode_daftar,
					'kode_user' => $this->session->kode_user,
					'kk' => $new_name,
				];

				if($cek2 == false){

					$this->db->insert('tbl_berkas_siswa', $data);
					$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di tambah", "success");');
				}else{
					
					$this->db->where('kode_user', $this->session->kode_user);
					$this->db->update('tbl_berkas_siswa', $data);
					$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di tambah", "success");');
				}

				redirect('app/ppdb?slide=3');
				

			}


		}


		function add_akte(){


			$this->db->where('kode_user', $this->session->kode_user);
			$cek = $this->db->get('tbl_siswa')->row_array();
			$kode_daftar  = $cek['kode_pendaftaran'];

			$this->db->where('kode_user', $this->session->kode_user);
			$cek2 = $this->db->get('tbl_berkas_siswa')->row_array();


			$config['upload_path']          = './assets/berkas';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;
			$config['encrypt_name'] 		= true;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload("akte")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Foto gagal di upload", "error");');
				redirect('app/ppdb?slide=3');

			}else{

				$img = array('upload_data' => $this->upload->data());
				$new_name = $img['upload_data']['file_name'];

				$data = [

					
					'kode_pendaftaran' => $kode_daftar,
					'kode_user' => $this->session->kode_user,
					'akte' => $new_name,
				];

				if($cek2 == false){

					$this->db->insert('tbl_berkas_siswa', $data);
					$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di tambah", "success");');
				}else{
					
					$this->db->where('kode_user', $this->session->kode_user);
					$this->db->update('tbl_berkas_siswa', $data);
					$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di tambah", "success");');
				}

				redirect('app/ppdb?slide=3');
				

			}


		}



		function add_tf(){


			$this->db->where('kode_user', $this->session->kode_user);
			$cek = $this->db->get('tbl_siswa')->row_array();
			$kode_daftar  = $cek['kode_pendaftaran'];

			$this->db->where('kode_user', $this->session->kode_user);
			$cek2 = $this->db->get('tbl_pembayaran')->row_array();


			$config['upload_path']          = './assets/berkas';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;
			$config['encrypt_name'] 		= true;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload("tf")){
				$error = array('error' => $this->upload->display_errors());

				$this->session->set_flashdata('message', 'swal("Ops", "Foto gagal di upload", "error");');
				redirect('app/ppdb?slide=4');

			}else{

				$img = array('upload_data' => $this->upload->data());
				$new_name = $img['upload_data']['file_name'];

				$data = [

					
					'kode_pendaftaran' => $kode_daftar,
					'kode_user' => $this->session->kode_user,
					'tf' => $new_name,
				];

				if($cek2 == false){

					$this->db->insert('tbl_pembayaran', $data);
					$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di tambah", "success");');
				}else{
					
					$this->db->where('kode_user', $this->session->kode_user);
					$this->db->update('tbl_pembayaran', $data);
					$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil di upload", "success");');
				}

				redirect('app/ppdb?slide=4');
				

			}


		}




		function act_login(){

			$username = $this->input->post('username');

			$this->db->where('username', $username);
			$cek = $this->db->get('tbl_user')->row_array();
			var_dump($cek);

			

			if($cek == true){

				if(password_verify($this->input->post('pass'), $cek['password'])){

					$data = [
						'kode_user' => $cek['kode_user'],
						'username' => $cek['username'],
					];

					$this->session->set_userdata($data);
					redirect('app/ppdb');
				}else{

					$this->session->set_flashdata('message', 'swal("Yess", "Password anda salah", "error" );');
					redirect('app/login');
				}
			}else{

				$this->session->set_flashdata('message', 'swal("Ops", "Akun anda salah", "error" );');
				redirect('app/login');
			}
		}


		function register(){


			$this->load->library('form_validation');
			// $this->form_validation->set_rules('ulangi_password', ' Confirm Password', 'required');
			// $this->form_validation->set_rules('email', 'Email', 'is_unique[tbl_user.email]');

			if($this->form_validation->run() == false){

				$this->load->view('template2/header');
				$this->load->view('app/register');
				$this->load->view('template2/footer');
			}else{

				$kode = 'user-'.rand(0, 10000);

				$data = [
					'kode_user' => $kode,
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
				];

				$this->db->insert('tbl_user', $data);
				redirect('app/register');
			}
		}

		function add_register(){


			$kode = 'user-'.rand(0, 10000);

			$data = [
				'kode_user' => $kode,
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
			];

			$this->db->insert('tbl_user', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Akun anda berhasil dibuat", "success" );');
			redirect('app/register');

			// $this->load->library('form_validation');

			// $this->form_validation->set_rules('pass', 'Password', 'matches[pass2]');

			// if($this->form_validation->run() == false)

		}


		function keluar(){

			$this->session->unset_userdata('username');
			$this->session->unset_userdata('kode_user');
			$this->session->set_flashdata('message', 'swal("Yess", "Akun anda berhasil keluar", "success" );');
			
			redirect('app/index');
		}


		function pdf(){

			$this->load->library('dompdf_gen');

			$data['siswa'] = $this->db->get_where('tbl_siswa', ['kode_user' => $this->session->kode_user])->row_array();
			$data['berkas'] = $this->db->get_where('tbl_berkas_siswa', ['kode_user' => $this->session->kode_user])->row_array();

			$this->load->view('app/kartupendaftaran', $data);
			$paper_size = 'A4';
			$orientation= 'potraid';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orientation);

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Kartu_pendaftaran.pdf", array('Attachment' =>0));

		}


		function kontak(){

			$this->load->view('template2/header');
			$this->load->view('app/kontak');
			$this->load->view('template2/footer');

		}

	}

?>