<?php
class Pages extends Controller
{
  public function __construct()
  {
    // call some models
    $this->enquiryModel = $this->model("Enquiries");
    $this->homepageModel = $this->model('Homepage');
    $this->dropdownModel = $this->model('Dropdowns');
    $this->adminModel = $this->model('Admin');
  }

  // Load Homepage
  public function index()
  {
    $home_page_details = $this->homepageModel->getDataById(1);
    $dropdown1 = $this->dropdownModel->getDropdown1Data();
    $dropdown2 = $this->dropdownModel->getDropdown2Data();
    $dropdown3 = $this->dropdownModel->getDropdown3Data();
    // initialize data 
    $data = [
      'name' => '',
      'name_err' => '',
      'phone_number' => '',
      'phone_number_err' => '',
      'email' => '',
      'email_err' => '',
      'field1' => '',
      'field2' => '',
      'field3' => '',
      'field4' => '',
      'field5' => '',
      'field6' => '',
      'dropdown1_value' => '',
      'dropdown2_value' => '',
      'dropdown3_value' => '',
      'home_page_details' => $home_page_details,
      'dropdown1' => $dropdown1,
      'dropdown2' => $dropdown2,
      'dropdown3' => $dropdown3,
    ];
    // load view
    $this->view('pages/index', $data);
  }

  // add enquiry
  public function add()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $home_page_details = $this->homepageModel->getDataById(1);
      $dropdown1 = $this->dropdownModel->getDropdown1Data();
      $dropdown2 = $this->dropdownModel->getDropdown2Data();
      $dropdown3 = $this->dropdownModel->getDropdown3Data();
      $admin = $this->adminModel->getAllAdmin();


      // sanitize
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // initialize data      
      $data = [
        'name' => trim($_POST['name']),
        'name_err' => '',
        'phone_number' => trim($_POST['phone_number']),
        'phone_number_err' => '',
        'email' => trim($_POST['email']),
        'email_err' => '',
        'field1' => '',
        'field2' => '',
        'field3' => '',
        'field4' => '',
        'field5' => '',
        'field6' => '',
        'dropdown1_value' => '',
        'dropdown2_value' => '',
        'dropdown3_value' => '',
        'dropdown1' => $dropdown1,
        'dropdown2' => $dropdown2,
        'dropdown3' => $dropdown3,
        'admin' => $admin,
      ];
     




      // validate data
      if (empty($data['name'])) {
        $data['name_err'] = "please enter name";
      }
      if (strlen($data['phone_number']) < 10 || strlen($data['phone_number']) > 10) {
        echo "phone_number";
        return;
      }
      if (empty($data['email'])) {
        $data['email_err'] = "please enter email";
      }
         

      // check fields are available or not
      if ($home_page_details->field1) {
        $data['field1'] = $_POST['field1'];
      }
      if ($home_page_details->field2) {
        $data['field2'] = $_POST['field2'];
      }
      if ($home_page_details->field3) {
        $data['field3'] = $_POST['field3'];
      }
      if ($home_page_details->field4) {
        $data['field4'] = $_POST['field4'];
      }
      if ($home_page_details->field5) {
        $data['field5'] = $_POST['field5'];
      }
      if ($home_page_details->field6) {
        $data['field6'] = $_POST['field6'];
      }



      // check dropdown are available or not
      if ($home_page_details->dropdown1) {

        $data['dropdown1_value'] = $_POST['dropdown1_value'];
      }
      if ($home_page_details->dropdown2) {
        $data['dropdown2_value'] = $_POST['dropdown2_value'];
      }
      if ($home_page_details->dropdown3) {
        $data['dropdown3_value'] = $_POST['dropdown3_value'];
      }
      

      // make sure errors are empty
      if (empty($data['email_err']) && empty($data['phone_number_err']) && empty($data['name_err'])) {

        if ($this->enquiryModel->Add($data)) {
          foreach($data['admin'] as $admin){
           // call mailer method
         $this->sendRegistrationMail($admin->email, $admin->name);
          }
          flash('enquiry_message', 'your request is send');
          echo "<div class='text-success'>Data added successfully </div>";
          // redirect('pages');
        } else {
          die("Error");
        }
      } 
    }
  }



  // send Signup email
  public function sendRegistrationMail($email, $name, $membership_number = '', $membership_expire = '')
  {
    $details = $this->homepageModel->getDataById(1);
    $username = $_POST['name'];
    $usernumber = $_POST['phone_number'];
    $useremail = $_POST['email'];
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
      //Server settings
      //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = $details->main_email;                     // SMTP username
      $mail->Password   = 'Digihive@321';                               // SMTP password
      $mail->SMTPSecure = "ssl";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above 587

      //Recipients
      $mail->setFrom($details->main_email, 'Mailer');
      $mail->addAddress($email, $name);     // Add a recipient
      // $mail->addAddress('ellen@example.com');               // Name is optional
      // $mail->addReplyTo('info@example.com', 'Information');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');

      // // Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


      $message = "Dear " . $name . "<br/><br/>";

      $message .= "Enquiry Registration Successfully Submitted By: <br><br> User Name : ". $username ."<br> User Number : ".$usernumber."<br> User Email : ".$useremail."<br>";

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Enquiry Registration';
      $mail->Body    = $message;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      return true;
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      return false;
    }
  }
}
