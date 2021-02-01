<?php
  class Backends extends Controller{
    public function __construct(){
      $this->adminModel = $this->model('Admin');
    $this->homepageModel = $this->model('Homepage');

      // $this->contactModel = $this->model('Contactenquiry');
      // $this->jobEnquiryModel = $this->model('Jobenquiry');
    }


    public function index(){
        // Check if logged in
        if($this->isLoggedIn()){
          redirect(ADMINPANEL.'/main');
        }
  
        // Check if POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Sanitize POST
          $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          // initialize data
          $data = [       
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),        
            'email_err' => '',
            'password_err' => '',       
          ];
  
          // Check for email
          if(empty($data['email'])){
            $data['email_err'] = 'Please enter email.';
          }
  
          // Check for name
          if(empty($data['name'])){
            $data['name_err'] = 'Please enter name.';
          }
  
          // Check for user
          if($this->adminModel->findUserByEmail($data['email'])){
            // User Found
          } else {
            // No User
            $data['email_err'] = 'This email is not registered.';
          }
  
          // Make sure errors are empty
          if(empty($data['email_err']) && empty($data['password_err'])){
  
            // Check and set logged in user
            $loggedInUser = $this->adminModel->login($data['email'], $data['password']);
  
            if($loggedInUser){
              // User Authenticated!
              $this->createAdminSession($loggedInUser);
             
            } else {
              $data['password_err'] = 'Password incorrect.';
              // Load View
              $this->view('admin/index', $data);
            }
             
          } else {
            // Load View
            $this->view('admin/index', $data);
          }
  
        } else {
          // If NOT a POST
  
          // Init data
          $data = [
            'email' => '',
            'password' => '',
            'email_err' => '',
            'password_err' => '',
          ];
  
          // Load View
          $this->view('admin/index', $data);
        }
    }

    public function register(){
      // Check if logged in
      if(!$this->isLoggedIn()){
        redirect(ADMINPANEL);
      }

      // Check if POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Validate email
        if(empty($data['email'])){
            $data['email_err'] = 'Please enter an email';
            // Validate name
            if(empty($data['name'])){
              $data['name_err'] = 'Please enter a name';
            }
        } else{
          // Check Email
          if($this->adminModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'Email is already taken.';
          }
        }

        // Validate password
        if(empty($data['password'])){
          $password_err = 'Please enter a password.';     
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Password must have atleast 6 characters.';
        }

        // Validate confirm password
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Please confirm password.';     
        } else{
            if($data['password'] != $data['confirm_password']){
                $data['confirm_password_err'] = 'Password do not match.';
            }
        }
         
        // Make sure errors are empty
        if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // SUCCESS - Proceed to insert

          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          //Execute
          if($this->adminModel->register($data)){
            // Redirect to login
            flash('admin_message', 'new admin registered successfully ');
            redirect(ADMINPANEL.'/showalladmin');
          } else {
            die('Something went wrong');
          }
           
        } else {
          // Load View
          $this->view('admin/register', $data);
        }
      } else {
        // IF NOT A POST REQUEST

        // Init data
        $data = [
          'name' => '',
          'email' => '',
          'password' => '',
          'confirm_password' => '',
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Load View
        $this->view('admin/register', $data);
      }
    }


 
    public function main(){
      if(!$this->isLoggedIn()){
        redirect(ADMINPANEL);
      }
    $homepage = $this->homepageModel->getDataById(1);
     $data = [
       'homepage' => $homepage
     ];
      $this->view('admin/main',$data);
    }


    public function showalladmin(){
      if(!$this->isLoggedIn()){
        redirect(ADMINPANEL);
      }
    $homepage = $this->homepageModel->getDataById(1);
      $alladmin=$this->adminModel->getAllAdmin();
      $data = [
        'alladmin' => $alladmin,
        'homepage' => $homepage,
      ];

      $this->view('admin/alladmin',$data);
    }

    public function delete()
    {
  
  
      // Check if POST
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
        $id = $_POST['id'];
  
        //Execute
        if ($this->adminModel->deleteAdmin($id)) {
          // Redirect to login
  
          flash('admin_message', 'Admin remove Successfully', 'alert alert-danger');
          redirect(ADMINPANEL.'/showalladmin');
        } else {
          die('Something went wrong');
        }
      } else {
  
        redirect(ADMINPANEL.'/showalladmin');
      }
    }


    public function about(){
      if(!$this->isLoggedIn()){
        redirect(ADMINPANEL);
      }
      $this->view('admin/about');
    }





/* ----------------------------- helper function ---------------------------- */



    // Create Session With User Info
    public function createAdminSession($user){
      $_SESSION['admin_id'] = $user->id;
      $_SESSION['admin_email'] = $user->email; 
      $_SESSION['admin_name'] = $user->name;
      $_SESSION['admin_role'] = $user->role;
      redirect(ADMINPANEL.'/main');
    }

    // Logout & Destroy Session
    public function logout(){
      unset($_SESSION['admin_id']);
      unset($_SESSION['admin_email']);
      unset($_SESSION['admin_name']);
      session_destroy();
      redirect(ADMINPANEL);
    }

    // Check Logged In
    public function isLoggedIn(){
      if(isset($_SESSION['admin_id'])){
        return true;
      } else {
        return false;
      }
    }
  }