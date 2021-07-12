<?php
class Obat extends Controller
{
  public function index()
  {
    $data['title'] = 'Obat';
    $data['subTitle'] = 'Daftar Obat';
    $data['obat'] = $this->model('ObatModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('obat/index', $data);
    $this->view('templates/footer');
  }
  public function show($id)
  {
    $data['title'] = 'Obat';
    $data['obat'] = $this->model('ObatModel')->getDataById($id);
    $this->view('templates/header', $data);
    $this->view('obat/index', $data);
    $this->view('templates/footer');
  }
  public function create()
  {
    if ($this->model('ObatModel')->insertData($_POST) > 0) {
      header('Location: ' . BASE_URL . '/obat');
      exit;
    }
  }
}
