<?php
class PeriksaDetail extends Controller
{
  public function index()
  {
    $data['title'] = 'Periksa';
    $data['subTitle'] = 'Daftar Periksa';
    $data['detail'] = $this->model('PeriksaDetailModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('periksa/detail', $data);
    $this->view('templates/footer');
  }
  public function resep($id)
  {
    $data['title'] = 'Detail';
    $data['subTitle'] = 'Resep periksa ';
    $data['obat'] = $this->model('ObatModel')->getAll();
    $data['data'] = $this->model('PeriksaDetailModel')->getData($id);
    $data['total'] = $this->model('PeriksaDetailModel')->total($id);
    $data['detail'] = $this->model('PeriksaDetailModel')->getDataById($id);
    $this->view('templates/header', $data,);
    $this->view('periksa/resep', $data);
    $this->view('templates/footer');
    // var_dump($data['total']['tot']);
  }
  public function insert()
  {

    if ($this->model('PeriksaDetailModel')->insertData($_POST) > 0) {
      Flasher::setFlash('Obat', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/periksaDetail/resep/id');
      exit;
    } else {
      Flasher::setFlash('Obat', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/periksaDetail/resep/id');
      exit;
    }
  }
}
