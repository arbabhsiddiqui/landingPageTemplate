<?php require APPROOT . '/views/admin/inc/header.php'; ?>

<?php require APPROOT . '/views/admin/inc/navbar.php'; ?>







<!-- -------------------------- progress section --------------------------- -->
<section id="progress-section">

  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row mb-4 align-item-center">
          <!----------------------------------------------- Show Drop Downs Values ------------------------------>
          <div class="col-xl-6 col-12 mx-auto">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="text-muted my-5">Show Dropdown 2 Values</h4>
              </div>

            </div>

            <div class="row">

              <div class="col-sm-6 my-5 ">
                <?php echo flash('dropdown2_message') ?>
                <div id="delete-message" class="text-danger"></div>

              </div>
            </div>



            <div class="container">
              <!-- row 1 -->
              <div class="row p-3 mb-4 task-border align-item-center bg-light">

                <div class="col-2">
                  id
                </div>
                <div class=" col-6 ">
                  Value
                </div>
                <div class="col-2">
                  Delete
                </div>
              </div>
              <!-- row 1 end -->

              <!-- rows call by db -->
              <div id="dropdowns">
              </div>

              <!-- rows calls end here -->


            </div>
          </div>


          <!----------------------------------------------- Add Dropdowns Values ------------------------------>

          <div class="col-xl-6 col-12 mx-auto">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="text-muted my-5">Add Values</h4>
              </div>

            </div>

            <div class="row">

              <div class="col-sm-6 my-5 ">
                <?php echo flash('dropdown2_message') ?>
                <div id="message" class="text-success"></div>
              </div>
            </div>



            <div class="container-fluid">

              <div class="row p-3 mb-4 task-border align-item-center bg-light">
                <div class="col-12 ">
                  <form id="add-dropdown-form" novalidate>
                    <div class="row pt-3">

                      <br>
                      <div class="col-sm-12">

                        <div class="form-group">
                          <label for="">Value *</label>
                          <input type="text" name="value" id="value" class="form-control" value="<?= $data['value'] ?>" placeholder="Enter the Value" aria-describedby="helpId" required>
                          <small id="helpId" class="invalid-feedback">Please Enter Value</small>
                        </div>
                      </div>

                      <div class="col-sm-3 pt-4">
                        <button type="submit" class="btn btn-info" id="">
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <!-- rows calls end here -->


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- -------------------------- progress section end --------------------------- -->
<script>
  const addForm = document.getElementById("add-dropdown-form");
  const message = document.getElementById("message");
  const deletemessage = document.getElementById("delete-message");
  const dropdowns = document.getElementById("dropdowns");
  // add form
  addForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(addForm);
    const data = await fetch("<?= URLROOT ?>/managedropdowns/adddropdown2", {
      method: "POST",
      body: formData,

    });
    const response = await data.text();
    // console.log(response);
    if (addForm.checkValidity() === false) {
      e.preventDefault();
      e.stopPropagation();
      addForm.classList.add("was-validated");
      message.innerHTML = response;

      return false;

    } else {
      message.innerHTML = response;
      addForm.reset();
      addForm.classList.remove("was-validated");

    }
    fetchAllDropdown2();
  });

  // fetch dropdown2 data method
  function GetDropdown2(dropdown2) {
    // console.log(dropdown1);
    let text = '';
    for (i in dropdown2) {
      text += `<div class="row p-3 mb-4 task-border align-item-center bg-light">
                  <div class="col-2">
                    ${dropdown2[i].id}
                  </div>
                  <div class="col-sm-6 ">
                    ${dropdown2[i].value}
                  </div>
                  <div class="col-2 ">
                    
                  <a id="${dropdown2[i].id}" class="btn text-danger delete">Delete</a>

                      </a>
                    </form>
                  </div>
                </div>`;

    }
    dropdowns.innerHTML = text;


  }
  // get Drop down Data
  const fetchAllDropdown2 = async () => {
    const data = await fetch("<?= URLROOT ?>/managedropdowns/get_AllDropdown2", {
      method: "GET",
    });
    const response = await data.text();
    // console.log(response);
    let values = JSON.parse(response);
    // console.log(values);
    GetDropdown2(values);
    // $('#enquiry_table').DataTable();
  };

  window.addEventListener('DOMContentLoaded', fetchAllDropdown2());


  // delete dropdown2 data
  const deleteDropdown2 = async (id) => {
    console.log("id", id);
    const data = await fetch(`<?= URLROOT ?>/managedropdowns/deletedropdown2/${id}`, {
      method: "POST",
    });

    const response = await data.text();
    // console.log(response);
    if (response) {
      deletemessage.innerHTML = response;
    } else {
      deletemessage.innerHTML = response;

    }


  };

  addEventListener("click", (e) => {

    if (e.target && e.target.matches("a.delete")) {
      e.preventDefault();
      let id = e.target.getAttribute("id");
      // console.log(id);
      deleteDropdown2(id);
      fetchAllDropdown2();
      // addForm();

    }
  });
</script>




<?php require APPROOT . '/views/admin/inc/footer.php'; ?>