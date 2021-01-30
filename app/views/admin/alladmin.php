<?php require APPROOT . '/views/admin/inc/header.php'; ?>

<?php require APPROOT . '/views/admin/inc/navbar.php'; ?>







<!-- -------------------------- progress section --------------------------- -->
<section id="progress-section" class="h-100">

  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row mb-4 align-item-center">

          <div class="col-xl-6 col-12 mx-auto">
          <div class="row my-5">
            <div class="col-sm-6">
            <h4 class="text-muted ">Admin List</h4>
            </div>
          
          </div>
          <div class="row my-2">
            <div class="col-sm-6">
              <?php flash('admin_message');?>
          </div>
            
          </div>

            
            <div class="container-fluid">
              <!-- row 1 -->
              <div class="row p-3 mb-4 task-border align-item-center bg-light">
               
              <div class="col-1">
                id
              </div>
                <div class=" col-2 ">
                   Name
                </div>
                <div class="col-6">
                  email 
                </div>
               
                <div class="col-1 ">
                  Delete
                </div>
              </div>
              <!-- row 1 end -->

              <!-- rows call by db -->
              <?php foreach($data['alladmin'] as $product):?>
                <div class="row p-3 mb-4 task-border align-item-center bg-light">
               <div class="col-1">
                 <?= $product->id?>
               </div>
                <div class="col-sm-2">
              <?= $product->name ?>
                </div>
                <div class=" col-6">
                <?= $product->email ?>
                </div>
              
                <div class="col-1 col-md-2">
                  <form action="<?= URLROOT?>/<?= ADMINPANEL?>/delete" method="post">
                      <input type="text" name='id' value="<?= $product->id ?>" hidden>
                  <button class=" btn-empty" type="submit"   >
                    <i class="fas fa-trash text-danger fa-large"></i>
                  </button>
                  </form>
                </div>
              </div>
              <?php endforeach;?>
            
              <!-- rows calls end here -->


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- -------------------------- progress section end --------------------------- -->





<?php require APPROOT . '/views/admin/inc/footer.php'; ?>