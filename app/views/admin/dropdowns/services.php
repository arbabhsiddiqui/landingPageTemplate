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
                <h4 class="text-muted my-5">Show Services</h4>
              </div>

            </div>

            <div class="row">

              <div class="col-sm-6 my-5 ">
                <?php echo flash('service_message') ?>
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
                <h4 class="text-muted my-5">Add Services</h4>
              </div>

            </div>

            <div class="row">

              <div class="col-sm-6 my-5 ">
                <?php echo flash('service_message') ?>
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
    const data = await fetch("<?= URLROOT ?>/managedropdowns/addservices", {
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
    fetchAllServices();
  });

  // fetch services data method
  function GetServices(services) {
    // console.log(dropdown1);
    let text = '';
    for (i in services) {
      text += `<div class="row p-3 mb-4 task-border align-item-center bg-light">
                  <div class="col-2">
                    ${services[i].id}
                  </div>
                  <div class="col-sm-6 ">
                    ${services[i].value}
                  </div>
                  <div class="col-2 ">
                    
                  <a id="${services[i].id}" class="btn text-danger delete">Delete</a>

                      </a>
                    </form>
                  </div>
                </div>`;

    }
    dropdowns.innerHTML = text;


  }
  // get Drop down Data
  const fetchAllServices = async () => {
    const data = await fetch("<?= URLROOT ?>/managedropdowns/get_AllServices", {
      method: "GET",
    });
    const response = await data.text();
    // console.log(response);
    let values = JSON.parse(response);
    // console.log(values);
    GetServices(values);
    // $('#enquiry_table').DataTable();
  };

  window.addEventListener('DOMContentLoaded', fetchAllServices());


  // delete services data
  const deleteServices = async (id) => {
    console.log("id", id);
    const data = await fetch(`<?= URLROOT ?>/managedropdowns/deleteservices/${id}`, {
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
      deleteServices(id);
      fetchAllServices();
      // addForm();

    }
  });
</script>




<?php require APPROOT . '/views/admin/inc/footer.php'; ?>