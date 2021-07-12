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
      header('Location: ' . BASE_URL . '/User');
      exit;
    }
  }
}
