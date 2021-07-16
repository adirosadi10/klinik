<?php
class Transaksi extends Controller
{
  public function index()
  {
    $data['title'] = 'Transaksi';
    $data['subTitle'] = 'Menunggu Pembayaran';
    $data['transaksi'] = $this->model('TransaksiModel')->getAll();
    $this->view('templates/header', $data);
    $this->view('transaksi/index', $data);
    $this->view('templates/footer');
  }
  public function show($id)
  {
    $data['title'] = 'transaksi';
    $data['transaksi'] = $this->model('transaksiModel')->getDataById($id);
    $this->view('templates/header', $data);
    $this->view('transaksi/index', $data);
    $this->view('templates/footer');
  }
  public function create()
  {
    if ($this->model('transaksiModel')->insertData($_POST) > 0) {
      Flasher::setFlash('transaksi', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/transaksi');
      exit;
    } else {
      Flasher::setFlash('transaksi', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/transaksi');
      exit;
    }
  }
  public function delete($id)
  {
    if ($this->model('transaksiModel')->deleteData($id) > 0) {
      Flasher::setFlash('transaksi', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/transaksi');
      exit;
    } else {
      Flasher::setFlash('transaksi', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/transaksi');
      exit;
    }
  }
  public function getId()
  {
    echo json_encode($this->model('transaksiModel')->getDataById($_POST['id']));
  }
  public function update()
  {
    if ($this->model('transaksiModel')->updateData($_POST) > 0) {
      Flasher::setFlash('transaksi', 'berhasil', 'dibayar', 'success');
      header('Location: ' . BASE_URL . '/transaksi');
      exit;
    } else {
      Flasher::setFlash('transaksi', 'gagal', 'dibayar', 'danger');
      header('Location: ' . BASE_URL . '/transaksi');
      exit;
    }
  }
  public function search()
  {
    $data['title'] = 'transaksi';
    $data['subTitle'] = 'Daftar transaksi';
    $data['transaksi'] = $this->model('transaksiModel')->searchData();
    $this->view('templates/header', $data);
    $this->view('transaksi/index', $data);
    $this->view('templates/footer');
  }
}
