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
      Flasher::setFlash('Pegawai', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/pegawai');
      exit;
    } else {
      Flasher::setFlash('Pegawai', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/pegawai');
      exit;
    }
  }
  public function delete($id)
  {
    if ($this->model('PegawaiModel')->deleteData($id) > 0) {
      Flasher::setFlash('Pegawai', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/pegawai');
      exit;
    } else {
      Flasher::setFlash('Pegawai', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/pegawai');
      exit;
    }
  }
  public function getId()
  {
    echo json_encode($this->model('PegawaiModel')->getDataById($_POST['id']));
  }
  public function update()
  {
    if ($this->model('PegawaiModel')->updateData($_POST) > 0) {
      Flasher::setFlash('Pegawai', 'berhasil', 'diedit', 'success');
      header('Location: ' . BASE_URL . '/pegawai');
      exit;
    } else {
      Flasher::setFlash('Pegawai', 'gagal', 'diedit', 'danger');
      header('Location: ' . BASE_URL . '/pegawai');
      exit;
    }
  }
  public function search()
  {
    $data['title'] = 'Pegawai';
    $data['subTitle'] = 'Daftar Pegawai';
    $data['pegawai'] = $this->model('PegawaiModel')->searchData();
    $this->view('templates/header', $data);
    $this->view('pegawai/index', $data);
    $this->view('templates/footer');
  }
}
