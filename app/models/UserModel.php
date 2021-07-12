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
    $query = "INSERT INTO user VALUES ('',:id_pegawai,:username,:email,:password,:level)";
    $this->db->query($query);
    $this->db->bind('id_pegawai', $data['id_pegawai']);
    $this->db->bind('username', $data['username']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('level', $data['level']);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function updateData()
  {
  }
  public function deleteData()
  {
  }
}
