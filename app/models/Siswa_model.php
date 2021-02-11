<?php 

/**
 * Siswa Model Class
 */
class Siswa_model {
	private $table = 'siswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllSiswa()
	{
		$this->db->query("SELECT * FROM $this->table");
		return $this->db->resultSet();
	}

	public function getSiswaById($id)
	{
		$this->db->query("SELECT * FROM $this->table WHERE id=:id");
		$this->db->bind('id', $id);
		return $this->db->resultRow();
	}

	public function tambahData($data)
	{
		$sql = "INSERT INTO siswa
					VALUES
				('', :nama, :no, :kelas, :jurusan)";
		$this->db->query($sql);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('no', $data['no']);
		$this->db->bind('kelas', $data['kelas']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->countRow();
	}

	public function hapusData($data)
	{
		$sql = "DELETE FROM siswa WHERE id = :id";
		$this->db->query($sql);
		$this->db->bind('id', $data['id']);

		$this->db->execute();
		return $this->db->countRow();
	}

	public function updateData($data)
	{
		$sql = "UPDATE siswa SET
				nama = :nama,
				no = :no,
				kelas = :kelas,
				jurusan = :jurusan
				WHERE id = :id
				";

		$this->db->query($sql);
		$this->db->bind('id', $data['id']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('no', $data['no']);
		$this->db->bind('kelas', $data['kelas']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->countRow();
	}

	public function searchSiswa()
	{
		$keyword = $_POST['keyword'];
		$sql = "SELECT * FROM siswa WHERE nama LIKE :keyword";

		$this->db->query($sql);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}

}