<?php
class Home extends Controller
{

  public function index()
  {
    $data['title'] = 'HOME';
    $data['subTitle'] = 'Daftar User';
    $data['user'] = $this->model('UserModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('home/index', $data['user']);
    $this->view('templates/footer');
  }
}
