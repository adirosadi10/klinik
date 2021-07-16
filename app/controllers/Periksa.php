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
  public function dosisObat()
  {
    $data['title'] = 'Pendaftaran';
    $data['subTitle'] = 'Daftar Periksa';
    $data['obat'] = $this->model('ObatModel')->getAll();
    $data['periksa'] = $this->model('PeriksaModel')->getDosis();
    $this->view('templates/header', $data);
    $this->view('periksa/dosisObat', $data);
    $this->view('templates/footer');
  }
  public function tambah()
  {
    $data['title'] = 'Pendaftaran';
    $data['subTitle'] = 'Daftar Periksa';
    $data['obat'] = $this->model('ObatModel')->getAll();
    $data['periksa'] = $this->model('PeriksaModel')->getDosis();
    $data['detail'] = $this->model('PeriksaModel')->getdetail();
    $this->view('templates/header', $data);
    $this->view('periksa/tambahObat', $data);
    $this->view('templates/footer');
  }
  public function tambahObat()
  {
    if ($this->model('PeriksaModel')->insertData($_POST) > 0) {
      Flasher::setFlash('Obat', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/periksa/tambah');
      exit;
    } else {
      Flasher::setFlash('Obat', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/periksa/tambah');
      exit;
    }
  }
  public function update()
  {
    if ($this->model('PeriksaModel')->updateData($_POST) > 0) {
      Flasher::setFlash('Periksa', 'berhasil', 'diedit', 'success');
      header('Location: ' . BASE_URL . '/periksa');
      exit;
    } else {
      Flasher::setFlash('periksa', 'gagal', 'diedit', 'danger');
      header('Location: ' . BASE_URL . '/periksa');
      exit;
    }
  }
}
