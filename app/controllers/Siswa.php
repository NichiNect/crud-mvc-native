<?php 

/**
 * Siswa Class for Controller
 */
class Siswa extends Controller {
	public function index()
	{
		$data['title'] = "Siswa";
		$data['siswasw'] = $this->model('Siswa_model')->getAllSiswa();
		$this->view('templates/header', $data);
		$this->view('siswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['title'] = "Siswa";
		$data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
		$this->view('templates/header', $data);
		$this->view('siswa/detail', $data);
		$this->view('templates/footer');
	}

	public function create()
	{
		if( $this->model('Siswa_model')->tambahData($_POST) > 0 ) {
			Flashdata::setFlash("Data berhasil ditambahkan!");
			header("Location: " . BASEURL . "/siswa");
			exit;
		} else {
			Flashdata::setFlash("Data gagal ditambahkan!", 'danger');
			header("Location: " . BASEURL . "/siswa");
			exit;
		}
	}

	public function delete($id)
	{
		if( $this->model('Siswa_model')->hapusData($id) > 0 ) {
			Flashdata::setFlash("Data berhasil ditambahkan!");
			header("Location: " . BASEURL . "/siswa");
			exit;
		} else {
			Flashdata::setFlash("Data gagal ditambahkan!", 'danger');
			header("Location: " . BASEURL . "/siswa");
			exit;
		}
	}

	public function edit()
	{
		$id = $_POST['id'];
		echo json_encode($this->model('Siswa_model')->getSiswaById($id));
	}

	public function update()
	{
		if( $this->model('Siswa_model')->updateData($_POST) > 0 ) {
			Flashdata::setFlash("Data berhasil diubah!");
			header("Location: " . BASEURL . "/siswa");
			exit;
		} else {
			Flashdata::setFlash("Data gagal diubah!", 'danger');
			header("Location: " . BASEURL . "/siswa");
			exit;
		}
	}

	public function cari()
	{
		$data['title'] = "Siswa";
		$data['siswasw'] = $this->model('Siswa_model')->searchSiswa();
		$this->view('templates/header', $data);
		$this->view('siswa/index', $data);
		$this->view('templates/footer');
	}
}