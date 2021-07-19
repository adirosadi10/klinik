<?php
class Periksa extends Controller
{
  public function index()
  {
    $data['title'] = 'Periksa';
    $data['subTitle'] = 'Daftar Periksa';
    $data['periksa'] = $this->model('PeriksaModel')->getAll();
    $data['tindakan'] = $this->model('TindakanModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('periksa/index', $data);
    $this->view('templates/footer');
  }
  public function getId()
  {
    echo json_encode($this->model('PeriksaModel')->getDataById($_POST['id']));
  }
  public function update()
  {
    if ($this->model('PeriksaModel')->updateData($_POST) > 0) {
      Flasher::setFlash('Periksa', 'berhasil', 'diproses', 'success');
      header('Location: ' . BASE_URL . '/periksa');
      exit;
    } else {
      Flasher::setFlash('periksa', 'gagal', 'diproses', 'danger');
      header('Location: ' . BASE_URL . '/periksa');
      exit;
    }
  }
}
