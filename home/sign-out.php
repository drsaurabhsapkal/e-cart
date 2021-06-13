<?php
session_start();
  if(isset($_SESSION['username'])){
      session_destroy();
      echo "<script> alert('Sign out Successfully ...!')</script>";
      echo "<script> location.href='http://127.0.0.1/e-cart'</script>";
}
?>