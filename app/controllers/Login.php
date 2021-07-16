<?php
class Login extends Controller
{
  private $table = 'user';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }
  public function index()
  {
    $data['title'] = 'Login';
    $this->view('login/index', $data);
    $this->view('templates/footer');
  }
  public function prosesLogin()
  {
    if (isset($_POST['login'])) {
      $password = $_POST['password'];
      $email = $_POST['email'];

      $query = "SELECT * FROM user WHERE email =$email";
      $this->db->query($query);
      // $this->db->bind('email', $email);
      $this->db->execute();
      $count = $this->db->rowCounts();
      if ($count == 0) {
        Flasher::setFlash('Login', 'gagal', 'email salah', 'danger');
        header('Location: ' . BASE_URL . '/login');
        exit;
      } else {
        if (password_verify($password, $query["password"])) {
          $_SESSION['username'] = $query['username'];
          $_SESSION['level'] = $query['level'];
          header('Location: ' . BASE_URL . '/home');
          exit;
        } else {
          Flasher::setFlash('Login', 'gagal', 'password salah', 'danger');
          header('Location: ' . BASE_URL . '/login');
          exit;
        }
      }
    }
  }
  public function logout()
  {
    session_start();
    session_destroy();
    // header("Location: "."BASE_")
  }
}
