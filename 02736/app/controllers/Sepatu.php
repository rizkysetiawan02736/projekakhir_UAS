<?php

class Sepatu extends Controller {
    public function index()
	{
		$data['judul'] = 'Sepatu';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header', $data);
	    $this->view('sepatu/index', $data);
		$this->view('templates/footer');
	}
}