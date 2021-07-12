<?php
class Pegawai extends Controller
{
  public function index()
  {
    $data['title'] = 'Pegawai';
    $data['subTitle'] = 'Daftar Pegawai';
    $data['pegawai'] = $this->model('PegawaiModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('pegawai/index', $data);
    $this->view('templates/footer');
  }
  public function show($id)
  {
    $data['title'] = 'Pegawai';
    $data['user'] = $this->model('PegawaiModel')->getDataById($id);
    $this->view('templates/header', $data);
    $this->view('pegawai/index', $data);
    $this->view('templates/footer');
  }
  public function create()
  {
    if ($this->model('PegawaiModel')->insertData($_POST) > 0) {
      header('Location: ' . BASE_URL . '/pegawai');
      exit;
    }
  }
}
