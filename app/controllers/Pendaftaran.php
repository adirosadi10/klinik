<?php
class Pendaftaran extends Controller
{
  public function index()
  {
    $data['title'] = 'Pendaftaran';
    $data['subTitle'] = 'Daftar Pendaftaran';
    $data['zona'] = $this->model('WilayahModel')->getAll();
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
      Flasher::setFlash('Pendaftaran', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/pendaftaran');
      exit;
    } else {
      Flasher::setFlash('Pendaftaran', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/pendaftaran');
      exit;
    }
  }
  public function delete($id)
  {
    if ($this->model('PendaftaranModel')->deleteData($id) > 0) {
      Flasher::setFlash('Pendaftaran', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/pendaftaran');
      exit;
    } else {
      Flasher::setFlash('Pendaftaran', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/pendaftaran');
      exit;
    }
  }
  public function getId()
  {
    echo json_encode($this->model('PendaftaranModel')->getDataById($_POST['id']));
  }
  public function update()
  {
    if ($this->model('PendaftaranModel')->updateData($_POST) > 0) {
      Flasher::setFlash('Pendaftaran', 'berhasil', 'diproses', 'success');
      header('Location: ' . BASE_URL . '/pendaftaran');
      exit;
    } else {
      Flasher::setFlash('Pendaftaran', 'gagal', 'diproses', 'danger');
      header('Location: ' . BASE_URL . '/pendaftaran');
      exit;
    }
  }
}
