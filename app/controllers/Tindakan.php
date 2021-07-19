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
      Flasher::setFlash('Tindakan', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/tindakan');
      exit;
    } else {
      Flasher::setFlash('Tindakan', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/tindakan');
      exit;
    }
  }
  public function delete($id)
  {
    if ($this->model('TindakanModel')->deleteData($id) > 0) {
      Flasher::setFlash('Tindakan', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/tindakan');
      exit;
    } else {
      Flasher::setFlash('Tindakan', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/tindakan');
      exit;
    }
  }
  public function getId()
  {
    echo json_encode($this->model('TindakanModel')->getDataById($_POST['id']));
  }
  public function update()
  {
    if ($this->model('TindakanModel')->updateData($_POST) > 0) {
      Flasher::setFlash('Tindakan', 'berhasil', 'diedit', 'success');
      header('Location: ' . BASE_URL . '/tindakan');
      exit;
    } else {
      Flasher::setFlash('Tindakan', 'gagal', 'diedit', 'danger');
      header('Location: ' . BASE_URL . '/tindakan');
      exit;
    }
  }
  public function search()
  {
    $data['title'] = 'Tindakan';
    $data['subTitle'] = 'Daftar Tindakan';
    $data['tindakan'] = $this->model('TindakanModel')->searchData();
    $this->view('templates/header', $data);
    $this->view('tindakan/index', $data);
    $this->view('templates/footer');
  }
}
