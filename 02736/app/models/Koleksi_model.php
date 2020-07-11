<?php

class Koleksi_model {
	private $table = 'koleksi';
	private $db;
	
	public function __construct()
	{
		$this->db = new Database;
	}
	
	public function getAllBuku()
	{
	    $this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
	
	public function getBukuById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahKoleksiBuku($data)
	{
		$query = "INSERT INTO koleksi
					VALUES
				  ('', :judul, :pengarang, :penerbit)";

		$this->db->query($query);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('pengarang', $data['pengarang']);
		$this->db->bind('penerbit', $data['penerbit']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusKoleksiBuku($id)
	{
		$query = "DELETE FROM koleksi WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahKoleksiBuku($data)
	{
		$query = "UPDATE koleksi set
		judul = :judul,
		pengarang = :pengarang,
		penerbit = :penerbit
		WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('pengarang', $data['pengarang']);
		$this->db->bind('penerbit', $data['penerbit']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariKoleksiBuku()
	{
		$keyword =$_POST['keyword'];
		$query = "SELECT * FROM koleksi WHERE judul LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}
}