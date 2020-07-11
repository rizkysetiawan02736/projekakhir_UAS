<?php

class Koleksi extends Controller {
    public function index()
	{
	    $data['judul'] = 'Koleksi Buku';
		$data['bku'] = $this->model('Koleksi_model')->getAllBuku();
	    $this->view('templates/header', $data);
		$this->view('koleksi/index', $data);
	    $this->view('templates/footer');
	}
	
	 public function detail($id)
	{
	    $data['judul'] = 'Detail Buku';
		$data['bku'] = $this->model('Koleksi_model')->getBukuById($id);
	    $this->view('templates/header', $data);
		$this->view('koleksi/detail', $data);
	    $this->view('templates/footer');
	}

	public function tambah()
	{
		if( $this->model('Koleksi_model')->tambahKoleksiBuku($_POST) > 0){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		}
	}

	public function hapus($id)
	{
		if( $this->model('Koleksi_model')->hapusKoleksiBuku($id) > 0){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		}
	}

	public function getubah()
	{
		echo json_encode($this->model('Koleksi_model')->getBukuById($_POST['id']));
	}

	public function ubah()
	{
		if( $this->model('Koleksi_model')->ubahKoleksiBuku($_POST) > 0){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		}
	}

	public function cari()
	{
	    $data['judul'] = 'Koleksi Buku';
		$data['bku'] = $this->model('Koleksi_model')->CariKoleksiBuku();
	    $this->view('templates/header', $data);
		$this->view('koleksi/index', $data);
	    $this->view('templates/footer');
	}
}