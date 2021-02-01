<?php require APPROOT . '/views/admin/inc/header.php'; ?>

<?php require APPROOT . '/views/admin/inc/navbar.php'; ?>







<!-- -------------------------- progress section --------------------------- -->
<section id="progress-section">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row mb-4 align-item-center">

                    <div class="col-xl-6 col-12 mx-auto">
                        <div class="container-fluid">
                            <div class="row my-5">
                                <div class="col-sm-8">
                                    <h4 class="text-muted ">Update Home Page </h4>
                                    <div id="message"></div>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <a class="btn btn-secondary" href="<?= URLROOT ?>/managehomepage">Back</a>
                                </div>
                            </div>


                            <div class="row my-2">
                                <div class="col-sm-6">
                                    <?php flash('homepage_message'); ?>
                                </div>

                            </div>
                            <?php if (!($_SESSION['admin_role'] == 0)) { ?>

                                <!-- ---------------------------------------Fields And Dropdowns Section -------------------------------------------------------->
                                <div class="col-sm-12 text-center">
                                    <h4>Fields Section</h4>
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row pt-3">

                                        <br>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Field1</label>
                                                <input type="text" name="field1" id="" class="form-control" value="<?= $data['field1'] ?>" placeholder="Enter Field1" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Field2</label>
                                                <input type="text" name="field2" id="" class="form-control" value="<?= $data['field2'] ?>" placeholder=" Enter Field2" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Field3</label>
                                                <input type="text" name="field3" id="" class="form-control" value="<?= $data['field3'] ?>" placeholder=" Enter Field3" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Field4</label>
                                                <input type="text" name="field4" id="" class="form-control" value="<?= $data['field4'] ?>" placeholder=" Enter Field4" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Field5</label>
                                                <input type="text" name="field5" id="" class="form-control" value="<?= $data['field5'] ?>" placeholder=" Enter Field5" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Field6</label>
                                                <input type="text" name="field6" id="" class="form-control" value="<?= $data['field6'] ?>" placeholder=" Enter Field6" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Dropdown1</label>
                                                <input type="text" name="dropdown1" id="" class="form-control" value="<?= $data['dropdown1'] ?>" placeholder=" Enter Dropdown1" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Dropdown2</label>
                                                <input type="text" name="dropdown2" id="" class="form-control" value="<?= $data['dropdown2'] ?>" placeholder=" Enter Dropdown2" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Dropdown3</label>
                                                <input type="text" name="dropdown3" id="" class="form-control" value="<?= $data['dropdown3'] ?>" placeholder=" Enter Dropdown3" aria-describedby="helpId">
                                            </div>
                                        </div>

                                        <div class="col-sm-3 pt-4">
                                            <button type="submit" name="submit" class="btn btn-info">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <!-- ---------------------------------------Color Section -------------------------------------------------------->
                                <div class="col-sm-12 text-center">
                                    <h4>Color Section</h4>
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row pt-3">

                                        <br>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Base Color</label>
                                                <input type="text" name="base_color" id="" class="form-control" value="<?= $data['base_color'] ?>" placeholder="Enter City" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Text Color</label>
                                                <input type="text" name="text_color" id="" class="form-control" value="<?= $data['text_color'] ?>" placeholder=" Enter Field2" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Border Color</label>
                                                <input type="text" name="border_color" id="" class="form-control" value="<?= $data['border_color'] ?>" placeholder=" Enter Field3" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Accent Color</label>
                                                <input type="text" name="accent_color" id="" class="form-control" value="<?= $data['accent_color'] ?>" placeholder=" Enter Field4" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Background Color</label>
                                                <input type="text" name="bg_color" id="" class="form-control" value="<?= $data['bg_color'] ?>" placeholder=" Enter Field5" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Button Color</label>
                                                <input type="text" name="btn_color" id="" class="form-control" value="<?= $data['btn_color'] ?>" placeholder=" Enter Field6" aria-describedby="helpId">
                                            </div>
                                        </div>

                                        <div class="col-sm-3 pt-4">
                                            <button type="submit" name="submit3" class="btn btn-info">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            <?php }?>

                                <!-- ---------------------------------------Social Link Section -------------------------------------------------------->
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row pt-3">

                                        <br>
                                        <div class="col-sm-12 text-center">
                                            <h4>Social Links Section</h4>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Facebook Link</label>
                                                <input type="text" name="facebook_link" id="" class="form-control" value="<?= $data['facebook_link'] ?>" placeholder="Enter Facebook Link" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Twitter Link</label>
                                                <input type="text" name="twitter_link" id="" class="form-control" value="<?= $data['twitter_link'] ?>" placeholder=" Enter Twitter Link" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Instagram Link</label>
                                                <input type="text" name="instagram_link" id="" class="form-control" value="<?= $data['instagram_link'] ?>" placeholder=" Enter Instagram Link" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">LinkedIn Link</label>
                                                <input type="text" name="linkedin_link" id="" class="form-control" value="<?= $data['linkedin_link'] ?>" placeholder=" Enter LinkedIn Link" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">YouTube Link</label>
                                                <input type="text" name="youtube_link" id="" class="form-control" value="<?= $data['youtube_link'] ?>" placeholder=" Enter YouTube Link" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">WhatsApp Number</label>
                                                <input type="number" name="whatsapp" id="" class="form-control" value="<?= $data['whatsapp'] ?>" placeholder=" Enter WhatsApp Number" aria-describedby="helpId">
                                            </div>
                                        </div>

                                        <div class="col-sm-3 pt-4">
                                            <button type="submit" name="submit1" class="btn btn-info">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <!-- ---------------------------------------Main Section -------------------------------------------------------->
                                <div class="col-sm-12 text-center">
                                    <h4>Main Section</h4>
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row pt-3">

                                        <br>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Disclaimer Heading</label>
                                                <input type="text" name="disclaimer_heading" id="" class="form-control" value="<?= $data['disclaimer_heading'] ?>" placeholder="Enter Disclaimer Heading" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Disclaimer Message</label>
                                                <input type="text" name="disclaimer_msg" id="" class="form-control" value="<?= $data['disclaimer_msg'] ?>" placeholder=" Enter Disclaimer Message" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" name="title" id="" class="form-control" value="<?= $data['title'] ?>" placeholder=" Enter Title" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Sub Title</label>
                                                <input type="text" name="sub_title" id="" class="form-control" value="<?= $data['sub_title'] ?>" placeholder=" Enter Sub Title" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">background Image</label>
                                                <input type="file" name="bg_image" id="" class="form-control <?php echo (!empty($data['bg_image_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['bg_image'] ?>" aria-describedby="helpId">
                                                <span class="invalid-feedback"><?php echo $data['bg_image_err']; ?></span>


                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Main Image</label>
                                                <input type="file" name="main_image" id="" class="form-control <?php echo (!empty($data['main_image_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['main_image'] ?>" aria-describedby="helpId">
                                                <span class="invalid-feedback"><?php echo $data['main_image_err']; ?></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Seo Title</label>
                                                <input type="text" name="seo_title" id="" class="form-control" value="<?= $data['seo_title'] ?>" placeholder=" Enter Seo Title" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Seo Keyword</label>
                                                <input type="text" name="seo_keyword" id="" class="form-control" value="<?= $data['seo_keyword'] ?>" placeholder=" Enter Seo Keyword" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Seo Description</label>
                                                <input type="text" name="seo_desc" id="" class="form-control" value="<?= $data['seo_desc'] ?>" placeholder=" Enter Seo Description" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Og Title</label>
                                                <input type="text" name="og_title" id="" class="form-control" value="<?= $data['og_title'] ?>" placeholder=" Enter Og Title" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Og Description</label>
                                                <input type="text" name="og_desc" id="" class="form-control" value="<?= $data['og_desc'] ?>" placeholder=" Enter Og Description" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Og Image</label>
                                                <input type="file" name="og_image" id="" class="form-control <?php echo (!empty($data['og_image_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['og_image'] ?>" aria-describedby="helpId">
                                                <span class="invalid-feedback"><?php echo $data['og_image_err']; ?></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Google Tag Manager</label>
                                                <input type="text" name="google_tag_manager" id="" class="form-control" value="<?= $data['google_tag_manager'] ?>" placeholder=" Enter Google Tag Manager Link" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Facebook Pixel</label>
                                                <input type="text" name="facebook_pixel" id="" class="form-control" value="<?= $data['facebook_pixel'] ?>" placeholder=" Enter Facebook pixel Link" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">Main Email</label>
                                                <input type="email" name="main_email" id="" class="form-control" value="<?= $data['main_email'] ?>" placeholder=" Enter main email" aria-describedby="helpId">
                                            </div>
                                        </div>



                                        <div class="col-sm-3 pt-4">
                                            <button type="submit" name="submit2" class="btn btn-info">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- -------------------------- progress section end --------------------------- -->




<?php require APPROOT . '/views/admin/inc/footer.php'; ?>