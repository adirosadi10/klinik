<?php
class Login extends Controller
{
  public function __construct()
  {
    $this->db = new Database;
  }
  public function index()
  {
    $data = [
      'title' => 'Login page',
      'username' => '',
      'password' => '',
      'usernameError' => '',
      'passwordError' => '',
    ];
    // check post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'title' => 'Login',
        'username' => trim($_POST['username']),
        'password' => trim($_POST['password']),
        'usernameError' => '',
        'passwordError' => ''
      ];
      // validate
      if (empty($data['username'])) {
        $data['usernameError'] = 'Please enter username';
      }
      if (empty($data['password'])) {
        $data['passwordError'] = 'Please enter password';
      }
      if (empty($data['username']) && empty($data['password'])) {
        $user = $this->model('UserModel')->UserLogin($data['username'], $data['password']);
        if ($user) {
          $_SESSION['user_id'] = $user->id;
          $_SESSION['username'] = $user->username;
          $_SESSION['level'] = $user->level;
          header('Location:' . BASE_URL . '/home/index');
        } else {
          $data['Error'] = 'Password atau Username salah, coba lagi ';
          $this->view('login/index', $data);
        }
      }
    } else {
      $data = [
        'title' => 'Login',
        'username' => '',
        'password' => '',
        'usernameError' => '',
        'passwordError' => '',
      ];
    }
    $this->view('login/index', $data);
  }
  public function logout()
  {
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("Location: " . BASE_URL . '/Login/index');
  }
}
