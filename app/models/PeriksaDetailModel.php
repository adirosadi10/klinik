<?php

class PeriksaDetailModel
{
  private $table = 'periksa';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAll()
  {
    $this->db->query('SELECT * FROM periksa WHERE status=:status');
    $this->db->bind('status', 1);
    return $this->db->resultSet();
  }
  public function getDataById($id)
  {
    $this->db->query('SELECT periksa.id as id,tindakan, tarif FROM periksa JOIN tindakan ON tindakan.id=periksa.id_tindakan WHERE periksa.id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function getData($id)
  {
    $this->db->query('SELECT periksaDetail.id, nama_obat, SUM(jumlah) AS jml, harga, SUM(jumlah * harga) as total FROM periksaDetail JOIN obat ON obat.id=periksaDetail.id_obat WHERE id_periksa=:id_periksa GROUP BY nama_obat');
    $this->db->bind('id_periksa', $id);

    return $this->db->resultSet();
  }
  public function  total($id)
  {
    $query = "SELECT SUM(jumlah * harga) as tot FROM `periksaDetail` JOIN obat ON obat.id=periksaDetail.id_obat WHERE id_periksa=:id_periksa group by id_periksa";
    $this->db->query($query);
    $this->db->bind('id_periksa', $id);

    return $this->db->single();
  }
  public function insertData($data)
  {
    $query = "INSERT INTO periksaDetail VALUES ('',:id_periksa,:id_obat,:jumlah)";
    $this->db->query($query);
    $this->db->bind('id_periksa', $data['id_periksa']);
    $this->db->bind('id_obat', $data['id_obat']);
    $this->db->bind('jumlah', $data['jumlah']);

    $this->db->execute();
    return $this->db->rowCounts();
    return $data['id'];
  }
}
