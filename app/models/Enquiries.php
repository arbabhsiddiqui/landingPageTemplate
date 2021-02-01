<?php
class Enquiries
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  // Add Enquiries
  public function Add($data)
  {
    // prepare Query
    $this->db->query("INSERT INTO page_enquiry (name,phone_number,email,field1,field2,field3,field4,field5,field6,dropdown1_value,
    dropdown2_value,dropdown3_value) 
    VALUES(:name,:phone_number,:email,:field1,:field2,:field3,:field4,:field5,:field6,:dropdown1_value,:dropdown2_value,:dropdown3_value)");
    // bind values
    $this->db->bind(":name", $data['name']);
    $this->db->bind(":phone_number", $data['phone_number']);
    $this->db->bind(":email", $data['email']);
    $this->db->bind(":field1", $data['field1']);
    $this->db->bind(":field2", $data['field2']);
    $this->db->bind(":field3", $data['field3']);
    $this->db->bind(":field4", $data['field4']);
    $this->db->bind(":field5", $data['field5']);
    $this->db->bind(":field6", $data['field6']);
    $this->db->bind(":dropdown1_value", $data['dropdown1_value']);
    $this->db->bind(":dropdown2_value", $data['dropdown2_value']);
    $this->db->bind(":dropdown3_value", $data['dropdown3_value']);
    // execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  // Fetch all Enquiries
  public function getData()
  {
    // prepare Query
    $this->db->query("SELECT * FROM page_enquiry WHERE status =:status");
    // bind values
    $this->db->bind(":status", 1);
    $result = $this->db->resultset();
    return $result;
  }

  // Update status
  public function updateStatus($id)
  {
    // prepare Query
    $this->db->query("UPDATE page_enquiry SET status = :status WHERE id =:id");
    // bind values
    $this->db->bind(":status", 0);
    $this->db->bind(":id", $id);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
