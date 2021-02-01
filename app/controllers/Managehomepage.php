<?php
class Managehomepage extends Controller
{
  public function __construct()
  {
    // call model 
    $this->homepageModel = $this->model('Homepage');
  }

  // Load Homepage
  public function index()
  {
    $homepage = $this->homepageModel->getDataById(1);
    $data = [
      'homepage' => $homepage
    ];

    $this->view('admin/homepage/index', $data);
  }

  // update Home Page
  public function edit($id)
  {


    // get data by Id
    $details = $this->homepageModel->getDataById($id);
    // check request is post 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // if set is submit then update field section
      if (isset($_POST['submit'])) {
        // initialize data

        $data = [
          'id' => $id,
          'field1' => trim($_POST['field1']),
          'field2' => trim($_POST['field2']),
          'field3' => trim($_POST['field3']),
          'field4' => trim($_POST['field4']),
          'field5' => trim($_POST['field5']),
          'field6' => trim($_POST['field6']),
          'dropdown1' => trim($_POST['dropdown1']),
          'dropdown2' => trim($_POST['dropdown2']),
          'dropdown3' => trim($_POST['dropdown3']),

        ];


        if ($this->homepageModel->fieldsDropdownUpdate($data)) {
          flash('homepage_message', 'your request is send');
          redirect('managehomepage');
        }
      } elseif (isset($_POST['submit1'])) {
        // if set is submit1 the update social links section
        // initialize data
        $data = [
          'id' => $id,
          'facebook_link' => trim($_POST['facebook_link']),
          'twitter_link' => trim($_POST['twitter_link']),
          'instagram_link' => trim($_POST['instagram_link']),
          'linkedin_link' => trim($_POST['linkedin_link']),
          'youtube_link' => trim($_POST['youtube_link']),
          'whatsapp' => trim($_POST['whatsapp']),
        ];
        //  update social links
        if ($this->homepageModel->socialLinksUpdate($data)) {

          flash('homepage_message', 'your request is send');
          redirect('managehomepage');
        }
      } elseif (isset($_POST['submit2'])) {
        // if set is submit2 then update main section

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $main_image = $_FILES['main_image']['name'];
        $bg_image = $_FILES['bg_image']['name'];
        $og_image = $_FILES['og_image']['name'];
        // initialize data

        $data = [
          'id' => $id,
          'bg_image' => $bg_image,
          'bg_image_err' => '',
          'main_image' => $main_image,
          'main_image_err' => '',
          'disclaimer_heading' => trim($_POST['disclaimer_heading']),
          'disclaimer_msg' => trim($_POST['disclaimer_msg']),
          'title' => trim($_POST['title']),
          'sub_title' => trim($_POST['sub_title']),
          'seo_title' => trim($_POST['seo_title']),
          'seo_keyword' => trim($_POST['seo_keyword']),
          'seo_desc' => trim($_POST['seo_desc']),
          'og_title' => trim($_POST['og_title']),
          'og_desc' => trim($_POST['og_desc']),
          'og_image' => $og_image,
          'main_email' => trim($_POST['main_email']),
          'og_image_err' => '',
          'google_tag_manager' => trim($_POST['google_tag_manager']),
          'facebook_pixel' => trim($_POST['facebook_pixel']),
          // fields And dropdowns section data
          'field1' => $details->field1,
          'field2' => $details->field2,
          'field3' => $details->field3,
          'field4' => $details->field4,
          'field5' => $details->field5,
          'field6' => $details->field6,
          'dropdown1' => $details->dropdown1,
          'dropdown2' => $details->dropdown2,
          'dropdown3' => $details->dropdown3,
          // social links section data 
          'facebook_link' => $details->facebook_link,
          'twitter_link' => $details->twitter_link,
          'instagram_link' => $details->instagram_link,
          'linkedin_link' => $details->linkedin_link,
          'youtube_link' => $details->youtube_link,
          'whatsapp' => $details->whatsapp,
          // colors section data
          'base_color' => $details->base_color,
          'text_color' => $details->text_color,
          'border_color' => $details->border_color,
          'btn_color' => $details->btn_color,
          'accent_color' => $details->accent_color,
          'bg_color' => $details->bg_color,


        ];

        // image validation

        if ($data['bg_image']) {
        $data['bg_image_err'] =  validateImage($_FILES['bg_image']['type']);
       
        } elseif (empty($data['bg_image'])) {
          $data['bg_image'] = $details->bg_image;
        }

        if ($data['main_image']) {
          $data['main_image_err'] =  validateImage($_FILES['main_image']['type']);

        } elseif (empty($data['main_image'])) {
          $data['main_image'] = $details->main_image;
        }
        if ($data['og_image']) {
          $data['og_image_err'] =  validateImage($_FILES['og_image']['type']);

        } elseif (empty($data['og_image'])) {
          $data['og_image'] = $details->og_image;
        }

        if (empty($data['main_image_err'] || $data['bg_image_err'] || $data['og_image_err'])) {

          if ($this->homepageModel->Edit($data)) {
            // move image in the folder
            move_uploaded_file($_FILES['main_image']['tmp_name'], "images/homepage/$main_image");
            move_uploaded_file($_FILES['bg_image']['tmp_name'], "images/homepage/$bg_image");
            move_uploaded_file($_FILES['og_image']['tmp_name'], "images/homepage/$og_image");

            flash('homepage_message', 'your request is send');
            redirect('managehomepage');
          }
        } else {
          // load view
          $this->view('admin/homepage/edit', $data);
        }
      } elseif (isset($_POST['submit3'])) {
        // if isset submit3 the update color section
        $data = [
          'id' => $id,
          'base_color' => trim($_POST['base_color']),
          'text_color' => trim($_POST['text_color']),
          'border_color' => trim($_POST['border_color']),
          'btn_color' => trim($_POST['btn_color']),
          'accent_color' => trim($_POST['accent_color']),
          'bg_color' => trim($_POST['bg_color']),

        ];

        // update colors
        if ($this->homepageModel->colorUpdate($data)) {
          flash('homepage_message', 'your request is send');
          redirect('managehomepage');
        }
      } else {
        // load view
        $this->view('admin/homepage/index');
      }
    } else {
      // initialize data
      $data = [
        // fields and dropdown data
        'field1' => $details->field1,
        'field2' => $details->field2,
        'field3' => $details->field3,
        'field4' => $details->field4,
        'field5' => $details->field5,
        'field6' => $details->field6,
        'dropdown1' => $details->dropdown1,
        'dropdown2' => $details->dropdown2,
        'dropdown3' => $details->dropdown3,
        // main section data
        'bg_image' => $details->bg_image,
        'bg_image_err' => '',
        'main_image' => $details->main_image,
        'main_image_err' => '',
        'disclaimer_heading' => $details->disclaimer_heading,
        'disclaimer_msg' => $details->disclaimer_msg,
        'title' => $details->title,
        'sub_title' => $details->sub_title,
        'seo_title' => $details->seo_title,
        'seo_keyword' => $details->seo_keyword,
        'seo_desc' => $details->seo_desc,
        'og_title' => $details->og_title,
        'og_desc' => $details->og_desc,
        'og_image' => $details->og_image,
        'google_tag_manager' => $details->google_tag_manager,
        'facebook_pixel' => $details->facebook_pixel,
        'main_email' => $details->main_email,
        // social links section data
        'facebook_link' => $details->facebook_link,
        'twitter_link' => $details->twitter_link,
        'instagram_link' => $details->instagram_link,
        'linkedin_link' => $details->linkedin_link,
        'youtube_link' => $details->youtube_link,
        'whatsapp' => $details->whatsapp,
        // color section data
        'base_color' => $details->base_color,
        'text_color' => $details->text_color,
        'border_color' => $details->border_color,
        'btn_color' => $details->btn_color,
        'accent_color' => $details->accent_color,
        'bg_color' => $details->bg_color,

      ];
      // load view
      $this->view('admin/homepage/edit', $data);
    }
  }
}
