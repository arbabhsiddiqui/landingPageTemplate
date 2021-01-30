<?php
class Dropdowns
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  // -----------------------------Dropdown1 ---------------------------------------

  // add drop down 1
  public function addDropdown1($data)
  {
    $this->db->query("INSERT INTO dropdown1 (value) VALUES(:value)");
    $this->db->bind(":value", $data['value']);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }



  // get data from dropdown1
  public function getDropdown1Data()
  {
    $this->db->query("SELECT * FROM dropdown1");
    $result = $this->db->resultset();
    return $result;
  }

  // delete dropdown1 
  public function deleteDropdown1($id)
  {

    // Prepare Query
    $this->db->query('DELETE FROM dropdown1 WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $id);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }



  // -----------------------------Dropdown2 ---------------------------------------

  // add drop down 2
  public function addDropdown2($data)
  {
    // prepare Query
    $this->db->query("INSERT INTO dropdown2 (value) VALUES(:value)");
    // bind values
    $this->db->bind(":value", $data['value']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // get data from dropdown2
  public function getDropdown2Data()
  {
    // prepare Query
    $this->db->query("SELECT * FROM dropdown2");
    $result = $this->db->resultset();
    return $result;
  }

  // delete dropdown2 
  public function deleteDropdown2($id)
  {

    // Prepare Query
    $this->db->query('DELETE FROM dropdown2 WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $id);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // -----------------------------Dropdown3 ---------------------------------------

  // add drop down 3
  public function addDropdown3($data)
  {
    // prepare Query
    $this->db->query("INSERT INTO dropdown3 (value) VALUES(:value)");
    // prepare Query
    $this->db->bind(":value", $data['value']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // get data from dropdown3
  public function getDropdown3Data()
  {
    // prepare Query
    $this->db->query("SELECT * FROM dropdown3");
    $result = $this->db->resultset();
    return $result;
  }

  // delete dropdown3 
  public function deleteDropdown3($id)
  {

    // Prepare Query
    $this->db->query('DELETE FROM dropdown3 WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $id);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
