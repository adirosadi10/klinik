<?php
class Tindakan extends Controller
{
  public function index()
  {
    $data['title'] = 'Tindakan';
    $data['subTitle'] = 'Daftar Tindakan';
    $data['tindakan'] = $this->model('TindakanModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('tindakan/index', $data);
    $this->view('templates/footer');
  }
  public function show($id)
  {
    $data['title'] = 'Tindakan';
    $data['tindakan'] = $this->model('TindakanModel')->getDataById($id);
    $this->view('templates/header', $data);
    $this->view('tindakan/index', $data);
    $this->view('templates/footer');
  }
  public function create()
  {
    if ($this->model('TindakanModel')->insertData($_POST) > 0) {
      header('Location: ' . BASE_URL . '/tindakan');
      exit;
    }
  }
}
