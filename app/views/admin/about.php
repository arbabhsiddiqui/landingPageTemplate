<?php require APPROOT . '/views/admin/inc/header.php'; ?>

<?php require APPROOT . '/views/admin/inc/navbar.php'; ?>







<!-- -------------------------- progress section --------------------------- -->
<section id="progress-section" >

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row mb-4 align-item-center">

                    <div class="col-xl-6 col-12 mx-auto">

                    <div class="row py-4">
                        <div class="col-sm-6 ">
                          <h3>
                          WebApp Info
                          </h3>
                        </div>
                       
                    </div>

                        <div class="card text-left mt-5">

                            <div class="card-body p-4">

                               <div class="row ">
                                   <div class="col-sm-4">
                                    Version
                                   </div>
                                   <div class="col-sm-8">
                                       <?= APPVERSION?>
                                   </div>
                               </div>
                               <div class="row  py-2">
                                   <div class="col-sm-4">
                                       Developed By
                                   </div>
                                   <div class="col-sm-8">
                                       Digihive
                                   </div>
                               </div>
                               

                             
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