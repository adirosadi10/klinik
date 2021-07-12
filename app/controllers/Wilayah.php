<?php
class Wilayah extends Controller
{
  public function index()
  {
    $data['title'] = 'Wilayah';
    $data['subTitle'] = 'Daftar Wilayah';
    $data['wilayah'] = $this->model('WilayahModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('wilayah/index', $data);
    $this->view('templates/footer');
  }
  public function show($id)
  {
    $data['title'] = 'Wilayah';
    $data['wilayah'] = $this->model('WilayahModel')->getDataById($id);
    $this->view('templates/header', $data);
    $this->view('wilayah/index', $data);
    $this->view('templates/footer');
  }
  public function create()
  {
    if ($this->model('WilayahModel')->insertData($_POST) > 0) {
      header('Location: ' . BASE_URL . '/wilayah');
      exit;
    }
  }
}
