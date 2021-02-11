<?php 

/**
 * About Class for Controler
 */
class About extends Controller {
	public function index($nama = 'Yoni')
	{
		$data['title'] = 'About';
		$data['nama'] = $nama;
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		echo "about/page woi";
	}
}