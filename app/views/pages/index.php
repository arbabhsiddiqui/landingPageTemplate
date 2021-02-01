
<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
/* colors  */
<?= $data['home_page_details']->base_color ?>
<?= $data['home_page_details']->text_color ?>
<?= $data['home_page_details']->border_color ?>
<?= $data['home_page_details']->btn_color ?>
<?= $data['home_page_details']->accent_color ?>
<?= $data['home_page_details']->bg_color ?>
</style>

<div class="container">
      <!--------------------------------------------------form-section------------------------------------------------------------>
      <div class="form">
        <div class="head" id="head">
          <h3 id="heading"><?= $data['home_page_details']->title ?></h3>
          <p><?= $data['home_page_details']->sub_title ?></p>
          <div id="message"></div>
    <div id="thanku"></div>
        </div>
        <form action="" id="add-contact-form" novalidate>
      <div class="form-group">
        <input type="text" name="name" id="" class="form-control" placeholder="Full Name" value="<?= $data['name'] ?>" aria-describedby="helpId" required />
        <small id="helpId" class="invalid-feedback">
          Full Name is required</small>
      </div>

      <div class="form-group">
        <input type="number" name="phone_number" id="form-control " class="form-control phone" placeholder="Phone No." value="<?= $data['phone_number'] ?>" aria-describedby="helpId" required />
        <small id="helpId" class="invalid-feedback">please enetr 10 digit phone number</small>
      </div>
      <div class="form-group">
        <input type="email" name="email" id="" class="form-control" placeholder="Email Id" value="<?= $data['email'] ?>" aria-describedby="helpId" required />
        <small id="helpId" class="invalid-feedback">Email is required</small>
      </div>
     
      <!-- ----------------------------------Fields Section start------------------------------------------------------ -->

      <!-- check fields are available or not  -->
        <div class="form-group">
          <input type="text" name="field1" id="" class="form-control" value="<?= $data['field1'] ?>" placeholder="<?= $data['home_page_details']->field1 ?>" aria-describedby="helpId"required>
          <small id="helpId" class="invalid-feedback">Current city is required</small>
       
        </div>
      <?php 
      if ($data['home_page_details']->field2) { ?>

        <div class="form-group">
          <input type="text" name="field2" id="" class="form-control" value="<?= $data['field2'] ?>" placeholder="<?= $data['home_page_details']->field2 ?>" aria-describedby="helpId">
        </div>
      <?php }
      if ($data['home_page_details']->field3) { ?>


        <div class="form-group">
          <input type="text" name="field3" id="" class="form-control" value="<?= $data['field3'] ?>" placeholder="<?= $data['home_page_details']->field3 ?>" aria-describedby="helpId">
        </div>
      <?php }
      if ($data['home_page_details']->field4) { ?>


        <div class="form-group">
          <input type="text" name="field4" id="" class="form-control" value="<?= $data['field4'] ?>" placeholder="<?= $data['home_page_details']->field4 ?>" aria-describedby="helpId">
        </div>
      <?php }
      if ($data['home_page_details']->field5) { ?>

        <div class="form-group">
          <input type="text" name="field5" id="" class="form-control" value="<?= $data['field5'] ?>" placeholder="<?= $data['home_page_details']->field5 ?>" aria-describedby="helpId">
        </div>
      <?php }
      if ($data['home_page_details']->field6) { ?>


        <div class="form-group">
          <input type="text" name="field6" id="" class="form-control" value="<?= $data['field6'] ?>" placeholder="<?= $data['home_page_details']->field6 ?>" aria-describedby="helpId">
        </div>
      <?php } ?>

      <!-- ----------------------------------Dropdown Section start------------------------------------------------------ -->

      <!-- check dropdowns are available or not -->
      <?php
      if ($data['home_page_details']->dropdown1) {
      ?>


        <div class="form-group">

          <select name="dropdown1_value" class="form-control" id="">
          <option value=""><?= $data['home_page_details']->dropdown1 ?> </option>
            <?php foreach ($data['dropdown1'] as $values) { ?>
              <option value="<?= $values->value ?>"><?= $values->value ?></option>
            <?php } ?>
          </select>
        </div>
      <?php }
      if ($data['home_page_details']->dropdown2) {
      ?>

        <div class="form-group">
          <select name="dropdown2_value" class="form-control" id="">
          <option value=""><?= $data['home_page_details']->dropdown2 ?> </option>
            <?php foreach ($data['dropdown2'] as $values) { ?>
              <option value="<?= $values->value ?>"><?= $values->value ?></option>
            <?php } ?>
          </select>
        </div>
      <?php }
      if ($data['home_page_details']->dropdown3) {
      ?>
        <div class="form-group">
          <select name="dropdown3_value" class="form-control" id="">
          <option value=""><?= $data['home_page_details']->dropdown3 ?> </option>
            <?php foreach ($data['dropdown3'] as $values) { ?>
              <option value="<?= $values->value ?>"><?= $values->value ?></option>
            <?php } ?>
          </select>
        </div>
<?php } ?>

      <div class="form-group mt">
        <button type="submit" class="btn" id="">
          Submit
        </button>
      </div>

    </form>
    <div class="footer" id="bottom">
      <div class="disclaimer">
        <h4><?= $data['home_page_details']->disclaimer_heading?></h4>
        <p class="disclaimer pl-4">
        <?= $data['home_page_details']->disclaimer_msg ?>
         
        </p>
      </div>

    </div>
      </div>
     

      <!--------------------------------------------------------------------image section-------------------------------------------------------->
      <div class="image">
    <img src="<?= URLROOT ?>/images/homepage/<?= $data['home_page_details']->main_image ?>" />
  </div>
    </div>

  
<!-- -----------------------------------------Start javaScript------------------------------------------- -->
<script>
  const addForm = document.getElementById("add-contact-form");
  const message = document.getElementById("message");
  // add form
  addForm.addEventListener("submit", async (e) => {

    if (addForm.checkValidity() === false) {
      e.preventDefault();
      e.stopPropagation();
      addForm.classList.add("was-validated");
      message.innerHTML = "<div class='text-danger'>Please fill required fields</div>";

      // return false;

    } else {
      e.preventDefault();
    const formData = new FormData(addForm);
    const data = await fetch("<?= URLROOT ?>/pages/add", {
      method: "POST",
      body: formData,

    });
    const response = await data.text();

    // console.log(response);
    if(response == 'phone_number'){
      message.innerHTML = "<div class='text-danger'>Please enter 10 digit number</div>";
    }else{
      message.innerHTML = '';
      addForm.parentNode.removeChild(addForm);
      thanku.innerHTML = "<div class='text-success center'style='margin-top:200px;'>“Thank you for sharing your details.<br>We will contact you soon!<br>Visit our website to explore more digital avenues.”<br><br><a href='https://www.digihive.co.uk/'class='btn btn-primary'>visit website</a>";
    }

    }
    
  });
  
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>
