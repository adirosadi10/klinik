<?php

class ObatModel
{
  private $table = 'obat';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAll()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getDataById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function insertData($data)
  {
    $query = "INSERT INTO obat VALUES ('',:no_obat,:nama_obat,:jenis,:harga,:stok)";
    $this->db->query($query);
    $this->db->bind('no_obat', $data['no_obat']);
    $this->db->bind('nama_obat', $data['nama_obat']);
    $this->db->bind('jenis', $data['jenis']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('stok', $data['stok']);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function updateData()
  {
  }
  public function deleteData()
  {
  }
}
