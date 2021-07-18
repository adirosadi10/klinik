<?php

class LaporanModel
{
  private $table = 'transaksi';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }
  public function getCetak()
  {
    $query = 'SELECT  transaksi.id as trans_id, transaksi.*, pendaftaran.* FROM transaksi JOIN periksa ON periksa.id=transaksi.id_periksa JOIN pendaftaran ON pendaftaran.id=periksa.id_daftar WHERE transaksi.status=:status';
    $this->db->query($query);
    $this->db->bind('status', 1);
    return $this->db->resultSet();
  }
  public function CetakLaporan($id)
  {
    $query = 'SELECT transaksi.*, pendaftaran.*,tindakan.*,periksa.keterangan FROM transaksi JOIN periksa ON periksa.id=transaksi.id_periksa JOIN pendaftaran ON pendaftaran.id=periksa.id_daftar JOIN tindakan ON tindakan.id=periksa.id_tindakan WHERE transaksi.id=:id';
    $this->db->query($query);
    $this->db->bind('id', $id);
    return $this->db->resultSet();
  }
  public function getData($id)
  {
    $query = 'SELECT periksa.keterangan,obat.*, periksadetail.jumlah,tindakan.* FROM transaksi JOIN periksa ON periksa.id=transaksi.id_periksa JOIN periksadetail ON periksadetail.id_periksa=periksa.id JOIN obat ON obat.id=periksadetail.id_obat JOIN tindakan ON tindakan.id=periksa.id_tindakan WHERE transaksi.id =:id GROUP BY periksadetail.id_obat';
    $this->db->query($query);
    $this->db->bind('id', $id);
    return $this->db->resultSet();
  }
  public function getCetakHarian($date)
  {
    $query = 'SELECT pendaftaran.created_at as tgl, transaksi.*, pendaftaran.* FROM transaksi JOIN periksa ON periksa.id=transaksi.id_periksa JOIN pendaftaran ON pendaftaran.id=periksa.id_daftar WHERE Date(transaksi.created_at)=:tgl';
    $this->db->query($query);
    $this->db->bind('tgl', $date);
    return $this->db->resultSet();
  }
  public function getTotalPeriodik($awal, $akhir)
  {
    $query = "SELECT date(created_at) as tanggal,SUM(total) as total FROM `transaksi` WHERE date(created_at) BETWEEN :awal AND :akhir GROUP BY date(created_at)";
    $this->db->query($query);
    $this->db->bind('awal', $awal);
    $this->db->bind('akhir', $akhir);
    return $this->db->resultSet();
  }
  public function getPrekPeriodik($awal, $akhir)
  {
    $query = "SELECT date(created_at) as tanggal,COUNT(nama_pasien) as kunjungan FROM `pendaftaran` WHERE date(created_at) BETWEEN :awal AND :akhir GROUP BY date(created_at)";
    $this->db->query($query);
    $this->db->bind('awal', $awal);
    $this->db->bind('akhir', $akhir);
    return $this->db->resultSet();
  }
  public function getTotalBulanan($bulan)
  {
    $bln = substr($bulan, -2);
    $thn = substr($bulan, 0, 4);
    $query = "SELECT date(created_at) as tanggal,SUM(total) as total FROM `transaksi` WHERE month(created_at) = :bln AND year(created_at)= :thn GROUP BY date(created_at)";
    $this->db->query($query);
    $this->db->bind('bln', $bln);
    $this->db->bind('thn', $thn);
    return $this->db->resultSet();
  }
  public function getPrekBulanan($bulan)
  {
    $bln = substr($bulan, -2);
    $thn = substr($bulan, 0, 4);
    $query = "SELECT date(created_at) as tanggal,COUNT(nama_pasien) as kunjungan FROM `pendaftaran` WHERE month(created_at) = :bln AND year(created_at)= :thn GROUP BY date(created_at)";
    $this->db->query($query);
    $this->db->bind('bln', $bln);
    $this->db->bind('thn', $thn);
    return $this->db->resultSet();
  }
}
