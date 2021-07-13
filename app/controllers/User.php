<?php
class User extends Controller
{
  public function index()
  {
    $data['title'] = 'User';
    $data['subTitle'] = 'Daftar User';
    $data['user'] = $this->model('UserModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('user/index', $data);
    $this->view('templates/footer');
  }
  public function show($id)
  {
    $data['title'] = 'User';
    $data['user'] = $this->model('UserModel')->getDataById($id);
    $this->view('templates/header', $data);
    $this->view('user/index', $data);
    $this->view('templates/footer');
  }
  public function create()
  {
    if ($this->model('UserModel')->insertData($_POST) > 0) {
      Flasher::setFlash('User', 'berhasil', 'ditambahkan', 'success');

      header('Location: ' . BASE_URL . '/user');
      exit;
    } else {
      Flasher::setFlash('User', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/user');
      exit;
    }
  }
  public function delete($id)
  {
    if ($this->model('UserModel')->deleteData($id) > 0) {
      Flasher::setFlash('User', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/user');
      exit;
    } else {
      Flasher::setFlash('User', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/user');
      exit;
    }
  }
  public function getId()
  {
    echo json_encode($this->model('UserModel')->getDataById($_POST['id']));
  }
  public function update()
  {
    if ($this->model('UserModel')->updateData($_POST) > 0) {
      Flasher::setFlash('User', 'berhasil', 'diedit', 'success');
      header('Location: ' . BASE_URL . '/user');
      exit;
    } else {
      Flasher::setFlash('User', 'gagal', 'diedit', 'danger');
      header('Location: ' . BASE_URL . '/user');
      exit;
    }
  }
}
