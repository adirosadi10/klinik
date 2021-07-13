<?php

class TindakanModel
{
  private $table = 'tindakan';
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
    $query = "INSERT INTO tindakan VALUES ('',:tindakan,:tarif)";
    $this->db->query($query);
    $this->db->bind('tindakan', $data['tindakan']);
    $this->db->bind('tarif', $data['tarif']);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function updateData($data)
  {
    $query = "UPDATE tindakan SET tindakan = :tindakan,tarif = :tarif WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('tindakan', $data['tindakan']);
    $this->db->bind('tarif', $data['tarif']);

    $this->db->execute();
    return $this->db->rowCounts();
  }
  public function deleteData($id)
  {
    $query = "DELETE FROM tindakan WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCounts();
  }
}
