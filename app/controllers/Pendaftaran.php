<?php
class Pendaftaran extends Controller
{
  public function index()
  {
    $data['title'] = 'Pendaftaran';
    $data['subTitle'] = 'Daftar Pendaftaran';
    $data['pendaftaran'] = $this->model('PendaftaranModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('pendaftaran/index', $data);
    $this->view('templates/footer');
  }
  public function show($id)
  {
    $data['title'] = 'Pendaftaran';
    $data['pendaftaran'] = $this->model('PendaftaranModel')->getDataById($id);
    $this->view('templates/header', $data);
    $this->view('pendaftaran/index', $data);
    $this->view('templates/footer');
  }
  public function create()
  {
    if ($this->model('PendaftaranModel')->insertData($_POST) > 0) {
      header('Location: ' . BASE_URL . '/pendaftaran');
      exit;
    }
  }
}
