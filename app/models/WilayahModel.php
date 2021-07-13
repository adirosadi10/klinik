<?php

class WilayahModel
{
  private $table = 'wilayah';
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
    $query = "INSERT INTO wilayah VALUES ('',:zona,:provinsi,:distrik,:kecamatan,:kelurahan)";
    $this->db->query($query);
    $this->db->bind('zona', $data['zona']);
    $this->db->bind('provinsi', $data['provinsi']);
    $this->db->bind('distrik', $data['distrik']);
    $this->db->bind('kecamatan', $data['kecamatan']);
    $this->db->bind('kelurahan', $data['kelurahan']);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function updateData($data)
  {
    $query = "UPDATE wilayah SET zona = :zona,provinsi = :provinsi,distrik = :distrik,kecamatan = :kecamatan,kelurahan = :kelurahan WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('zona', $data['zona']);
    $this->db->bind('provinsi', $data['provinsi']);
    $this->db->bind('distrik', $data['distrik']);
    $this->db->bind('kecamatan', $data['kecamatan']);
    $this->db->bind('kelurahan', $data['kelurahan']);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function deleteData($id)
  {
    $query = "DELETE FROM wilayah WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCounts();
  }
}
