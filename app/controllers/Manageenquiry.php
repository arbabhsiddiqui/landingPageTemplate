<?php
class Manageenquiry extends Controller
{
  public function __construct()
  {
    // call some model methods
    $this->enquiryModel = $this->Model("Enquiries");
    $this->homepageModel = $this->model('Homepage');
  }

  // Load Homepage
  public function index()
  {
    $homepage = $this->homepageModel->getDataById(1);
    $data = [
      'homepage' => $homepage
    ];
    $this->view('admin/enquiry/index', $data);
  }

  // Update enquiry status
  public function edit($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if ($this->enquiryModel->updateStatus($id)) {
        echo "deleted data successfully";
      } else {
        die("error");
        //  echo "not deleted";
      }
    } else {
      redirect("manageenquiry");
    }
  }
  public function downloadenquiry()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $enquiry = $this->enquiryModel->getData();
      $homepage = $this->homepageModel->getDataById(1);
      $data = [
        'homepage' => $homepage,
        'enquiry' => $enquiry,
      ];

      if ($data) {

        $this->view("admin/enquiry/excel", $data);
      } else {
        redirect('manageenquiry');
      }
    } else {
      redirect('manageenquiry');
    }
  }




  // fetch all enquiries with ajax
  public function get_AllEnquiery()
  {
    // die("he");
    $enquiry = $this->enquiryModel->getData();
    $homepage = $this->homepageModel->getDataById(1);
    // initialize data
    $output = [
      'enquiry' => $enquiry,
      'homepage' => $homepage,
    ];
    // data transfer into json format
    echo json_encode($output);
  }
}
