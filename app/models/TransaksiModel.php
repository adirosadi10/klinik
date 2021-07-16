<?php

class TransaksiModel
{
  private $table = 'transaksi';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAll()
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE status=:status');
    $this->db->bind('status', 0);
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
    $query = "INSERT INTO transaksi VALUES ('',:no_transaksi,:nama_transaksi,:jenis,:harga,:stok)";
    $this->db->query($query);
    $this->db->bind('no_transaksi', $data['no_transaksi']);
    $this->db->bind('nama_transaksi', $data['nama_transaksi']);
    $this->db->bind('jenis', $data['jenis']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('stok', $data['stok']);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function updateData($data)
  {
    $query = "UPDATE transaksi SET no_transaksi = :no_transaksi,total=:total,bayar=:bayar,kembali=:kembali,status=:status WHERE id =:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('no_transaksi', $data['no_transaksi']);
    $this->db->bind('total', $data['total']);
    $this->db->bind('bayar', $data['bayar']);
    $this->db->bind('kembali', $data['kembali']);
    $this->db->bind('status', 1);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function deleteData($id)
  {
    $query = "DELETE FROM transaksi WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function searchData()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM transaksi WHERE nama_transaksi LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}
