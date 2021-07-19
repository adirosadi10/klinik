<?php

class PeriksaModel
{
  private $table = 'periksa';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAll()
  {
    $this->db->query('SELECT periksa.*, pendaftaran.no_daftar FROM periksa JOIN pendaftaran ON pendaftaran.id=periksa.id_daftar WHERE periksa.status =:status');
    $this->db->bind('status', 0);
    return $this->db->resultSet();
  }
  public function getDetail($id)
  {
    $this->db->query('SELECT * FROM periksaDetail WHERE id_periksa =:id_periksa');
    $this->db->bind('id_periksa', $id);

    return $this->db->resultSet();
  }
  public function insertData($data)
  {
    $detail = "INSERT periksaDetail VALUES ('',:id_periksa,:id_obat,:jumlah) ";
    $this->db->query($detail);
    $this->db->bind('id_periksa', $data['id']);
    $this->db->bind('id_obat', $data['id_obat']);
    $this->db->bind('jumlah', $data['jumlah']);
    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function getDataById($id)
  {
    $this->db->query('SELECT periksa.*, pendaftaran.no_daftar FROM periksa JOIN pendaftaran ON pendaftaran.id=periksa.id_daftar WHERE periksa.id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function updateData($data)
  {
    $id_periksa = $data['id'];
    $query = "UPDATE periksa SET id_daftar = :id_daftar,id_tindakan=:id_tindakan,keterangan=:keterangan,status=:status WHERE id =:id";
    $this->db->query($query);
    $this->db->bind('id', $id_periksa);
    $this->db->bind('id_daftar', $data['id_daftar']);
    $this->db->bind('id_tindakan', $data['id_tindakan']);
    $this->db->bind('keterangan', $data['keterangan']);
    $this->db->bind('status', 1);
    $this->db->execute();

    return $this->db->rowCounts();
  }
}
