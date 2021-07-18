<?php
class  Laporan extends Controller
{

  public function formResi()
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Transaksi Selesai';
    $data['resi'] = $this->model('LaporanModel')->getCetak();
    $this->view('templates/header', $data);
    $this->view('laporan/formResi', $data);
    $this->view('templates/footer');
  }
  public function CetakResi($id)
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Transaksi Selesai';
    $data['cetak'] = $this->model('LaporanModel')->CetakLaporan($id);
    $data['data'] = $this->model('LaporanModel')->getData($id);
    $this->view('laporan/cetakResi', $data);
  }
  public function formHarian()
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Form Laporan Harian';
    $this->view('templates/header', $data);
    $this->view('laporan/formLapHarian');
    $this->view('templates/footer');
  }
  public function CetakHarian($date)
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Transaksi Selesai';
    $data['tanggal'] = $date;
    $data['cetak'] = $this->model('LaporanModel')->getCetakHarian($date);
    $this->view('laporan/cetakHarian', $data);
  }
  public function formPeriodik()
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Form Laporan Periodik';
    $this->view('templates/header', $data);
    $this->view('laporan/formLapPeriodik');
    $this->view('templates/footer');
  }
  public function cetakPeriodik($awal, $akhir)
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Transaksi Selesai';
    $data['getTotal'] = $this->model('LaporanModel')->getTotalPeriodik($awal, $akhir);
    $data['getPrek'] = $this->model('LaporanModel')->getPrekPeriodik($awal, $akhir);
    $this->view('laporan/cetakPeriodik', $data);
  }
  public function formBulanan()
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Form Laporan Bulanan';
    $this->view('templates/header', $data);
    $this->view('laporan/formLapBulanan');
    $this->view('templates/footer');
  }
  public function cetakBulanan($bulan)
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Transaksi Selesai';
    $data['getTotal'] = $this->model('LaporanModel')->getTotalBulanan($bulan);
    $data['getPrek'] = $this->model('LaporanModel')->getPrekBulanan($bulan);
    $this->view('laporan/cetakBulanan', $data);
  }
}
