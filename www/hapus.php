<?php
   $link = mysqli_connect('db','user','test',"dataPenduduk");

  if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $query = "DELETE FROM dataPenduduk WHERE id='$id' ";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($link).
           " - ".mysqli_error($link));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:index.php");
?>