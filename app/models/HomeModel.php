<?php

class HomeModel
{
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }
  public function getKunjungan(){
    $date = date('Y-m-d');
    $this->db->query('SELECT count(*) as kunjungan FROM pendaftaran WHERE date(created_at)=:created_at');
    $this->db->bind('created_at', $date);
    return $this->db->single();
  }
  public function getTunggu(){
    $date = date('Y-m-d');
    $this->db->query('SELECT count(*) as tunggu FROM pendaftaran WHERE date(created_at)=:created_at AND status=:status');
    $this->db->bind('created_at', $date);
    $this->db->bind('status', 0);
    return $this->db->single();
  }
  public function getTotal(){
    $date = date('Y-m-d');
    $this->db->query('SELECT sum(total) as total FROM `transaksi` WHERE date(created_at)=:created_at AND status=:status');
    $this->db->bind('created_at', $date);
    $this->db->bind('status', 1);
    return $this->db->single();
  }
  public function getbayar(){
    $this->db->query('SELECT count(*) as bayar FROM `transaksi` WHERE  status=:status');
    $this->db->bind('status', 0);
    return $this->db->single();
  }
  public function getTotalPeriodik()
  {
  $lastWeek = date('Y-m-d', strtotime('-7 days'));
  $date = date('Y-m-d');
  
    $query = "SELECT date(created_at) as tanggal,SUM(total) as total FROM `transaksi` WHERE date(created_at) BETWEEN :awal AND :akhir GROUP BY date(created_at)";
    $this->db->query($query);
    $this->db->bind('awal', $lastWeek);
    $this->db->bind('akhir', $date);
    return $this->db->resultSet();
  }
  public function getPrekPeriodik()
  {
    $lastWeek = date('Y-m-d', strtotime('-7 days'));
  $date = date('Y-m-d');
    $query = "SELECT date(created_at) as tanggal,COUNT(nama_pasien) as kunjungan FROM `pendaftaran` WHERE date(created_at) BETWEEN :awal AND :akhir GROUP BY date(created_at)";
    $this->db->query($query);
    $this->db->bind('awal', $lastWeek);
    $this->db->bind('akhir', $date);
    return $this->db->resultSet();
  }
}