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
      Flasher::setFlash('Wilayah', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/wilayah');
      exit;
    } else {
      Flasher::setFlash('Wilayah', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/wilayah');
      exit;
    }
  }
  public function delete($id)
  {
    if ($this->model('WilayahModel')->deleteData($id) > 0) {
      Flasher::setFlash('Wilayah', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/wilayah');
      exit;
    } else {
      Flasher::setFlash('Wilayah', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/wilayah');
      exit;
    }
  }
  public function getId()
  {
    echo json_encode($this->model('WilayahModel')->getDataById($_POST['id']));
  }
  public function update()
  {
    if ($this->model('WilayahModel')->updateData($_POST) > 0) {
      Flasher::setFlash('Wilayah', 'berhasil', 'diedit', 'success');
      header('Location: ' . BASE_URL . '/wilayah');
      exit;
    } else {
      Flasher::setFlash('Wilayah', 'gagal', 'diedit', 'danger');
      header('Location: ' . BASE_URL . '/wilayah');
      exit;
    }
  }
}
