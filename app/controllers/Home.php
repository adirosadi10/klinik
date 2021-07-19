<?php
class Home extends Controller
{

  public function index()
  {
    $data['title'] = 'HOME';
    $data['subTitle'] = 'Daftar User';
    $data['kunjungan'] = $this->model('HomeModel')->getKunjungan();
    $data['tunggu'] = $this->model('HomeModel')->getTunggu();
    $data['total'] = $this->model('HomeModel')->getTotal();
    $data['bayar'] = $this->model('HomeModel')->getbayar();
    $data['getTotal'] = $this->model('HomeModel')->getTotalPeriodik();
    $data['getPrek'] = $this->model('HomeModel')->getPrekPeriodik();
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
