   <!-- ------------------------------- navbar -------------------------------- -->
   <nav class="navbar navbar-expand-md navbar-light">
     <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="myNavbar">
       <div class="container">
         <div class="row">
           <!-- sidebar -->
           <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
             <a href="<?=URLROOT?>" class="navbar-brand text-center d-block mx-auto text-white bottom-border">
               Digihive
             </a>
             <div class="py-3  text-center bottom-border">
             <h6 class="text-center text-light"><?= $_SESSION['admin_name']?></h6>
             </div>
             <ul class="navbar-nav flex-column mt-4">
               <li class="nav-item text-light">
                 <a href="<?=URLROOT?>/backends" class="nav-link text-light sidebar-link current">
                   <i class="fas fa-home text-light fa-lg mr-3"> </i>
                   dashboard
                 </a>
               </li>
               <li class="nav-item text-light">
                 <a href="<?=URLROOT?>/manageenquiry" class="nav-link text-light sidebar-link">
                   <i class="fas fa-chart-bar text-light fa-lg mr-3"> </i>
                  Manage Enquiry
                 </a>
               </li>

               <li class="nav-item dropdown text-light">
                 <a class="nav-link dropdown-toggle text-light  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-chart-bar text-light fa-lg mr-3"> </i>  Manage dropdowns
                 </a>
                 <div class="dropdown-menu  bg-accent text-light" aria-labelledby="navbarDropdown">
                 <?php if($data['homepage']->dropdown1){ ?>
                   <a href="<?= URLROOT ?>/managedropdowns" class="nav-link text-light  sidebar-link">
                     <i class="fas fa-chart-bar text-light  fa-lg mr-3"> </i>
                     <?= $data['homepage']->dropdown1 ?>
                   </a>
                   <?php } if($data['homepage']->dropdown2){ ?>
                   <a href="<?= URLROOT ?>/managedropdowns/dropdown2" class="nav-link text-light  sidebar-link">
                     <i class="fas fa-chart-bar text-light  fa-lg mr-3"> </i>
                     <?= $data['homepage']->dropdown2 ?>

                   </a>
                   <?php } if($data['homepage']->dropdown3){ ?>
                   <a href="<?= URLROOT ?>/managedropdowns/dropdown3" class="nav-link text-light  sidebar-link">
                     <i class="fas fa-chart-bar text-light  fa-lg mr-3"> </i>
                     <?= $data['homepage']->dropdown3 ?>

                   </a>
                   <?php } ?>
                 </div>
               </li>

               <li class="nav-item text-light">
                 <a href="<?=URLROOT ?>/managehomepage" class="nav-link text-light sidebar-link">
                   <i class="fas fa-chart-bar text-light fa-lg mr-3"> </i>
                   Manage Home Page
                 </a>
               </li>
               <li class="nav-item dropdown text-light">
                 <a class="nav-link dropdown-toggle text-light  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-user text-light fa-lg mr-3"> </i> Manage Admin
                 </a>
                 <div class="dropdown-menu  bg-accent text-light" aria-labelledby="navbarDropdown">
                 <a href="<?= URLROOT?>/<?= ADMINPANEL?>/register" class="nav-link text-light  sidebar-link">
                     <i class="fas fa-chart-bar text-light  fa-lg mr-3"> </i>
                    Register Admin
                   </a>
                   <a href="<?= URLROOT?>/<?= ADMINPANEL?>/showalladmin" class="nav-link text-light  sidebar-link">
                     <i class="fas fa-chart-bar text-light  fa-lg mr-3"> </i>
                     View All Admin
                   </a>
                 
                 </div>
               </li>
              
             
             </ul>
           </div>
           <!-- end of sidebar -->
           <!-- tob-nav -->
           <div class="col-xl-10 col-lg-9 col-sm-8 py-2 top-nav ml-auto">
             <div class="row">
               <div class="col-md-4 pt-2">
                 <h6 class="text-uppercase text-dark"><?= $_SESSION['admin_role'] == 1 ? 'Super Admin' : 'Admin'; ?></h6>
               </div>
               <div class="col-md-5">
                 <!-- <form action="" method="POST">
                   <div class="form-group d-flex">
                     <input type="text" name="" id="" class="form-control search-input" placeholder="Search" aria-describedby="helpId" />
                     <button type="button" class="btn btn-light search-btn">
                       <i class="fas fa-search"></i>
                     </button>
                   </div>
                 </form> -->
               </div>
               <div class="col-md-3 pt-1">
                 <ul class="navbar-nav">
                   <!-- <li class="nav-item icon-parent">
                     <a class="nav-link icon-bullet">
                       <i class="fas fa-comment text-muted"></i>
                     </a>
                   </li>
                   <li class="nav-item icon-parent">
                     <a class="nav-link icon-bullet">
                       <i class="fas fa-bell text-muted"></i>
                     </a>
                   </li> -->
                   <li class="nav-item ml-md-auto">
                     <a class="nav-link" data-toggle="modal" data-target="#modelId">
                       <i class="fas fa-sign-out-alt text-danger"></i>
                     </a>
                   </li>
                 </ul>
               </div>
             </div>
           </div>
           <!-- end of top nav -->
         </div>
       </div>
     </div>
   </nav>

   <!-- ----------------------------- navbar end ------------------------------ -->





   <!-- ---------------------------- sign out model ---------------------------- -->

   <!-- Modal -->
   <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title">Want To Leave ?</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <div class="container-fluid">
             Press Logout to leave
           </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">
             Close
           </button>
           <a href="<?php echo URLROOT ?>/<?php echo ADMINPANEL ?>/logout" class="btn btn-danger">Logout</a>
         </div>
       </div>
     </div>
   </div>

   <!------------------------------ sign out model end ------------------------------>