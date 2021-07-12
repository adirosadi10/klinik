<?php
class Login extends Controller
{
  public function index()
  {
    $data['title'] = 'Login';
    $this->view('login/index', $data);
    $this->view('templates/footer');
  }
  public function prosesLogin()
  {
  }
  public function logout()
  {
  }
}
