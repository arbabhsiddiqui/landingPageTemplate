<?php
class Managedropdowns extends Controller
{
  public function __construct()
  {
    // call model method
    $this->dropdownModel = $this->Model("Dropdowns");
    $this->homepageModel = $this->model('Homepage');

  }



  // -------------------------------------------------------Dropdown 1 start ---------------------------------------------------------

  public function index()
  {
    $homepage = $this->homepageModel->getDataById(1);

    // initialize data
    $data = [
      'value' => '',
      'value_err' => '',
      'homepage' => $homepage
    ];
    $this->view('admin/dropdowns/dropdown1', $data);
  }
  // add dropdown values
  public function adddropdown1()
  {
    // check if post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // sanitize
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // initialize data
      $data = [
        'value' => trim($_POST['value']),
        'value_err' => '',
      ];
      // validate data 
      if (empty($data['value'])) {
        $data['value_err'] = "please enter value";
      }
      //  make sure errors are empty
      if (empty($data['value_err'])) {

        if ($this->dropdownModel->addDropdown1($data)) {
          // flash('dropdown1_message', 'your request is send');
          echo "<div class='text-success'>Data added Successfully</div>";
        } else {
          die("Error");
        }
      } else {

        echo "<div class='text-danger'>Please fill required field</div>";
      }
    }
  }
  // delete dropdown 1
  public function deletedropdown1($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if ($this->dropdownModel->deleteDropdown1($id)) {
        echo "deleted data successfully";
      } else {
        // die("error");
        echo "something went wrong";
      }
    } else {
      redirect("managedropdowns");
    }
  }
  // get data with ajax
  public function get_AllDropdown1()
  {
    $output = $this->dropdownModel->getDropdown1Data();
    echo json_encode($output);
  }


  // -------------------------------------------------------Drop Down 2 start ---------------------------------------------------------
  public function dropdown2()
  {
    $homepage = $this->homepageModel->getDataById(1);

    // initialize data
    $data = [
      'value' => '',
      'value_err' => '',
      'homepage' => $homepage

    ];
    $this->view('admin/dropdowns/dropdown2', $data);
  }
  // add dropdown2 values
  public function adddropdown2()
  {
    // check if post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // sanitize
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // initialize data
      $data = [
        'value' => trim($_POST['value']),
        'value_err' => '',
      ];
      if (empty($data['value'])) {
        $data['value_err'] = "please enter value";
      }
      //  make sure errors are empty
      if (empty($data['value_err'])) {

        if ($this->dropdownModel->addDropdown2($data)) {
          // flash('dropdown1_message', 'your request is send');
          echo "<div class='text-success'>Data added Successfully</div>";
        } else {
          die("Error");
        }
      } else {

        echo "<div class='text-danger'>Please fill required field</div>";
      }
    }
  }
  // delete dropdown2 values
  public function deletedropdown2($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {



      if ($this->dropdownModel->deleteDropdown2($id)) {
        echo "deleted data successfully";
      } else {
        // die("error");
        echo "data not deleted";
      }
    } else {
      redirect("managedropdowns");
    }
  }
  // get data with ajax
  public function get_AllDropdown2()
  {
    $output = $this->dropdownModel->getDropdown2Data();
    echo json_encode($output);
  }


  // -------------------------------------------------------Drop Down 3 start ---------------------------------------------------------
  public function dropdown3()
  {
    $homepage = $this->homepageModel->getDataById(1);

    // initialize data
    $data = [
      'value' => '',
      'value_err' => '',
      'homepage' => $homepage

    ];
    // load view
    $this->view('admin/dropdowns/dropdown3', $data);
  }

  // add drop down values
  public function adddropdown3()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // sanitize
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // initialize data
      $data = [
        'value' => trim($_POST['value']),
        'value_err' => '',
      ];
      // validate data
      if (empty($data['value'])) {
        $data['value_err'] = "please enter value";
      }
      //  make sure errors are empty
      if (empty($data['value_err'])) {

        if ($this->dropdownModel->addDropdown3($data)) {
          // flash('dropdown1_message', 'your request is send');
          echo "<div class='text-success'>Data added Successfully</div>";
        } else {
          die("Error");
        }
      } else {

        echo "<div class='text-danger'>Please fill required field</div>";
      }
    }
  }
  // delete dropdown3 values
  public function deletedropdown3($id)
  {
    // check if post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if ($this->dropdownModel->deleteDropdown3($id)) {
        echo "deleted data successfully";
      } else {
        // die("error");
        echo "not deleted";
      }
    } else {
      redirect("managedropdowns");
    }
  }
  // get data with ajax
  public function get_AllDropdown3()
  {
    $output = $this->dropdownModel->getDropdown3Data();
    echo json_encode($output);
  }
}
