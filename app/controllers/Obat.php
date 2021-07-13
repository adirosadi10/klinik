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
      Flasher::setFlash('Obat', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/obat');
      exit;
    } else {
      Flasher::setFlash('Obat', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/obat');
      exit;
    }
  }
  public function delete($id)
  {
    if ($this->model('ObatModel')->deleteData($id) > 0) {
      Flasher::setFlash('Obat', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/obat');
      exit;
    } else {
      Flasher::setFlash('Obat', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/obat');
      exit;
    }
  }
  public function getId()
  {
    echo json_encode($this->model('ObatModel')->getDataById($_POST['id']));
  }
  public function update()
  {
    if ($this->model('ObatModel')->updateData($_POST) > 0) {
      Flasher::setFlash('Obat', 'berhasil', 'diedit', 'success');
      header('Location: ' . BASE_URL . '/obat');
      exit;
    } else {
      Flasher::setFlash('Obat', 'gagal', 'diedit', 'danger');
      header('Location: ' . BASE_URL . '/obat');
      exit;
    }
  }
}
