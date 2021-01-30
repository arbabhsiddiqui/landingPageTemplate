<?php require APPROOT . '/views/admin/inc/header.php'; ?>

<?php require APPROOT . '/views/admin/inc/navbar.php'; ?>







<!-- -------------------------- progress section --------------------------- -->
<section id="progress-section">

  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row mb-4 align-item-center">

          <div class="col-xl-6 col-12 mx-auto">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="text-muted my-5">Current Home Page</h4>
              </div>
              <div class="col-sm-6 my-5 text-right">
                <a href="<?= URLROOT ?>/managehomepage/edit/1" class="btn btn-primary">Update </a>
              </div>
            </div>

            <div class="row">

              <div class="col-sm-6 my-5 ">
                <?php echo flash('homepage_message') ?>
              </div>
            </div>



            <div class="container-fluid">
              <?php if (!($_SESSION['admin_role'] == 0)) { ?>
                <!-- -------------------------Field And Dropdowns Section -------------------------------->
                <div class="row p-3 mb-4 task-border align-item-center bg-light">
                  <div class="col-12">
                    <h4 class="text-center">Fields And Dropdowns Section</h4>
                  </div><br>
                  <div class="col-6">Field1</div>
                  <div class="col-6"><?= $data['homepage']->field1 ?></div>
                  <div class="col-6">Field2</div>
                  <div class="col-6"><?= $data['homepage']->field2 ?></div>
                  <div class="col-6">Field3</div>
                  <div class="col-6"><?= $data['homepage']->field3 ?></div>
                  <div class="col-6">Field4</div>
                  <div class="col-6"><?= $data['homepage']->field4 ?></div>
                  <div class="col-6">Field5</div>
                  <div class="col-6"><?= $data['homepage']->field5 ?></div>
                  <div class="col-6">Field6</div>
                  <div class="col-6"><?= $data['homepage']->field6 ?></div>
                  <div class="col-6">Dropdown1</div>
                  <div class="col-6"><?= $data['homepage']->dropdown1 ?></div>
                  <div class="col-6">Dropdown2</div>
                  <div class="col-6"><?= $data['homepage']->dropdown2 ?></div>
                  <div class="col-6">Dropdown3</div>
                  <div class="col-6"><?= $data['homepage']->dropdown3 ?></div>

                </div>
                <hr>
                <!-- -------------------------Color Section -------------------------------->
                <div class="row p-3 mb-4 task-border align-item-center bg-light">
                  <div class="col-12">
                    <h4 class="text-center">Color Section</h4>
                  </div><br><br>
                  <div class="col-6">Base Color</div>
                  <div class="col-6"><?= $data['homepage']->base_color ?></div>
                  <div class="col-6">Text Color</div>
                  <div class="col-6"><?= $data['homepage']->text_color ?></div>
                  <div class="col-6">Border Color</div>
                  <div class="col-6"><?= $data['homepage']->border_color ?></div>
                  <div class="col-6">Button Color</div>
                  <div class="col-6"><?= $data['homepage']->btn_color ?></div>
                  <div class="col-6">Accent Color</div>
                  <div class="col-6"><?= $data['homepage']->accent_color ?></div>
                  <div class="col-6">Background Color</div>
                  <div class="col-6"><?= $data['homepage']->bg_color ?></div>

                </div>
              <?php } ?>
                <!--------------------------------------------Social Links Section -------------------------------->
                <div class="row p-3 mb-4 task-border align-item-center bg-light">

                  <div class="col-12">
                    <h4 class="text-center">Social Links Section</h4>
                  </div><br><br>

                  <div class="col-6">Facebook Link</div>
                  <div class="col-6"><?= $data['homepage']->facebook_link ?></div>
                  <div class="col-6">Twitter Link</div>
                  <div class="col-6"><?= $data['homepage']->twitter_link ?></div>
                  <div class="col-6">Instagram Link</div>
                  <div class="col-6"><?= $data['homepage']->instagram_link ?></div>
                  <div class="col-6">LinkedIn Link</div>
                  <div class="col-6"><?= $data['homepage']->linkedin_link ?></div>
                  <div class="col-6">YouTube Link</div>
                  <div class="col-6"><?= $data['homepage']->youtube_link ?></div>
                  <div class="col-6">WhatsApp Number</div>
                  <div class="col-6"><?= $data['homepage']->whatsapp ?></div>
                </div>
                <!--------------------------------------------Main Section -------------------------------->
                <div class="row p-3 mb-4 task-border align-item-center bg-light">

                  <div class="col-12">
                    <h4 class="text-center">Main Section</h4>
                  </div><br><br>
                  <div class="col-6 mb-3">Background Image</div>
                  <div class="col-6 mb-3">
                    <img src="<?= URLROOT ?>/images/homepage/<?= $data['homepage']->bg_image ?>" alt="bg image" width="240px;" height="100px;">
                  </div>
                  <div class="col-6 mb-3">Main Image</div>
                  <div class="col-6 mb-3">
                    <img src="<?= URLROOT ?>/images/homepage/<?= $data['homepage']->main_image ?>" alt="bg image" width="240px;" height="100px;">

                  </div>
                  <div class="col-6">Title</div>
                  <div class="col-6"><?= $data['homepage']->title ?></div>
                  <div class="col-6">Sub Title</div>
                  <div class="col-6"><?= $data['homepage']->sub_title ?></div>
                  <div class="col-6">Disclaimer Heading</div>
                  <div class="col-6"><?= $data['homepage']->disclaimer_heading ?></div>
                  <div class="col-6">Disclaimer Message</div>
                  <div class="col-6"><?= $data['homepage']->disclaimer_msg ?></div>
                  <div class="col-6">Seo Title</div>
                  <div class="col-6"><?= $data['homepage']->seo_title ?></div>
                  <div class="col-6">Seo Keyword</div>
                  <div class="col-6"><?= $data['homepage']->seo_keyword ?></div>
                  <div class="col-6">Seo Description</div>
                  <div class="col-6"><?= $data['homepage']->seo_desc ?></div>
                  <div class="col-6">Og Title</div>
                  <div class="col-6"><?= $data['homepage']->og_title ?></div>
                  <div class="col-6">Og Description</div>
                  <div class="col-6"><?= $data['homepage']->og_desc ?></div>
                  <div class="col-6">Og Image</div>

                  <img src="<?= URLROOT ?>/images/homepage/<?= $data['homepage']->og_image ?>" alt="bg image" width="240px;" height="100px;">

                  <div class="col-6">Google Tag Manager</div>
                  <div class="col-6"><?= $data['homepage']->google_tag_manager ?></div>

                  <div class="col-6">Facebook Pixel</div>
                  <div class="col-6"><?= $data['homepage']->facebook_pixel ?></div>
                  <div class="col-6">Main Email</div>
                  <div class="col-6"><?= $data['homepage']->main_email ?></div>


                </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- -------------------------- progress section end --------------------------- -->





<?php require APPROOT . '/views/admin/inc/footer.php'; ?>