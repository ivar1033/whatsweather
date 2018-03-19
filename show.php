<?php 

if($weather){

  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  '.$weather.'
  </div>';
}


if($error){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" >
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  '.$error.'
  </div>';
}


?>