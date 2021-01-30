<?php
  // Simple page redirect
  function redirect($page){
    header('location: '.URLROOT.'/'.$page);
  }

  function validateImage($image){
    if (!($image == 'image/png' || $image == 'image/jpg' || $image == 'image/jpeg')) {
      $image_error= "please select png, jpg & jpeg file";
      return $image_error;
    }

}

  