<?php

class UserModel
{
  private $table = 'user';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAll()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getDataById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function insertData($data)
  {

    $username = strtolower(stripcslashes($data['username']));
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES ('',:id_pegawai,:username,:email,:password,:level)";
    $this->db->query($query);
    $this->db->bind('id_pegawai', $data['id_pegawai']);
    $this->db->bind('username', $username);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $password);
    $this->db->bind('level', $data['level']);


    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function updateData($data)
  {
    $query = "UPDATE user SET id_pegawai = :id_pegawai,username = :username,email = :email,level = :level WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('id_pegawai', $data['id_pegawai']);
    $this->db->bind('username', $data['username']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('level', $data['level']);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function deleteData($id)
  {
    $query = "DELETE FROM user WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function UserLogin($username, $password)
  {
    $this->db->query('SELECT * FROM user WHERE username=:username');
    $this->db->bind('username', $username);
    $row = $this->db->single();
    $hashpass = $row['password'];
    var_dump($row);
    if (password_verify($password, $hashpass)) {
      return $row;
    } else {
      return false;
    }
  }
  public function searchData()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM user WHERE username LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}
