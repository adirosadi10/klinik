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
    $query = "INSERT INTO transaksi VALUES ('',:id_periksa,:no_transaksi,:total,'','',:status,:created_at,'')";
    $mt_rand = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5);
    $date = date('Y-m-d');
    $create = date('Y-m-d H:i:s');
    $no = $date . $mt_rand;

    $this->db->query($query);
    $this->db->bind('id_periksa', $data['id']);
    $this->db->bind('no_transaksi', $no);
    $this->db->bind('total', $data['total']);
    $this->db->bind('status', 0);
    $this->db->bind('created_at', $create);
    $this->db->execute();

    $query = "UPDATE periksa SET status=:status WHERE id =:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('status', 2);
    $this->db->execute();

    return $this->db->rowCounts();
  }
  public function updateData($data)
  {
    $create = date('Y-m-d H:i:s');

    $query = "UPDATE transaksi SET no_transaksi = :no_transaksi,total=:total,bayar=:bayar,kembali=:kembali,status=:status,updated_at=:updated_at WHERE id =:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('no_transaksi', $data['no_transaksi']);
    $this->db->bind('total', $data['total']);
    $this->db->bind('bayar', $data['bayar']);
    $this->db->bind('kembali', $data['kembali']);
    $this->db->bind('status', 1);
    $this->db->bind('updated_at', $create);

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
