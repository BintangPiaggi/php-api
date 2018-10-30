<?php
  $koneksi = mysqli_connect("localhost","root","","php-api");
  $id = $_GET['id'];
  $qry = "DELETE FROM user WHERE id='$id'";
  mysqli_query($koneksi, $qry);
  header("location:indexx.php");
 ?>