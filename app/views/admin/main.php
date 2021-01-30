<?php require APPROOT . '/views/admin/inc/header.php'; ?>

<?php require APPROOT . '/views/admin/inc/navbar.php'; ?>







<!-- ------------------------------  top card section ------------------------------- -->
<section id="top-card-section ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row pt-md-5 mb-md-4 mt-md-3">

          <div class="col-xl-6 col-sm-6 p-5">
            <a href="<?= URLROOT ?>/managecontact">
              <div class="card card-common">
                <div class="card-body">
                  <div class="d-flex justify-content-between">

                    <i class="fas fa-inbox text-warning fa-3x" aria-hidden="true"></i>
                    <div class="text-right text-secondary">
                      <h5>New Mail</h5>

                    </div>
                  </div> 
                </div>

                <div class="card-footer text-secondary text-center">

                  <span></span>
                </div>
              </div>
            </a>
          </div>
        
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ------------------------------ top card end ------------------------------- -->

<!-- ---------------------------- table section ---------------------------- -->


<!-- ---------------------------- table section end ---------------------------- -->



<?php require APPROOT . '/views/admin/inc/footer.php'; ?>