<?php

class PendaftaranModel
{
  private $table = 'pendaftaran';
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
    $query = "INSERT INTO pendaftaran VALUES ('',:no_daftar,:nama_pasien,:jk,:tmp_lahir,:tgl_lahir,:id_wilayah,:alamat,:no_hp,:status)";
    $this->db->query($query);
    $this->db->bind('no_daftar', $data['no_daftar']);
    $this->db->bind('nama_pasien', $data['nama_pasien']);
    $this->db->bind('jk', $data['jk']);
    $this->db->bind('tmp_lahir', $data['tmp_lahir']);
    $this->db->bind('tgl_lahir', $data['tgl_lahir']);
    $this->db->bind('id_wilayah', $data['id_wilayah']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('no_hp', $data['no_hp']);
    $this->db->bind('status', 0);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function updateData($data)
  {
    $query = "UPDATE pendaftaran SET status = :status WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('status', 1);


    $periksa = "INSERT INTO periksa VALUES ('',:id_daftar,'','',:status)";
    $id_daftar = $data['id'];
    $this->db->query($periksa);
    $this->db->bind('id_daftar', $id_daftar);
    $this->db->bind('status', 0);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function deleteData($id)
  {
    $query = "DELETE FROM pendaftaran WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCounts();
  }
}
