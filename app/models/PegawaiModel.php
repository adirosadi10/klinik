<?php

class PegawaiModel
{
  private $table = 'pegawai';
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
    $query = "INSERT INTO pegawai VALUES ('',:nip,:nama,:jk,:jabatan,:poli,:alamat,:no_hp)";
    $this->db->query($query);
    $this->db->bind('nip', $data['nip']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('jk', $data['jk']);
    $this->db->bind('jabatan', $data['jabatan']);
    $this->db->bind('poli', $data['poli']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('no_hp', $data['no_hp']);

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