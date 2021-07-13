<?php
class  Laporan extends Controller
{
  public function formHarian()
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Form Laporan Harian';
    $this->view('templates/header', $data);
    $this->view('laporan/formLapHarian');
    $this->view('templates/footer');
  }
  public function formBulanan()
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Form Laporan Bulanan';
    $this->view('templates/header', $data);
    $this->view('laporan/formLapBulanan');
    $this->view('templates/footer');
  }
  public function formPeriodik()
  {
    $data['title'] = 'Laporan';
    $data['subTitle'] = 'Form Laporan Periodik';
    $this->view('templates/header', $data);
    $this->view('laporan/formLapPeriodik');
    $this->view('templates/footer');
  }
}
