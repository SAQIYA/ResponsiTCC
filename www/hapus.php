<?php
   $link = mysqli_connect('db','user','test','Penduduk');

  if (isset($_GET["noKTP"])) {

    $noKTP = $_GET["noKTP"];

    $query = "DELETE FROM dataPenduduk WHERE noKTP='$noKTP' ";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($link).
           " - ".mysqli_error($link));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:index.php");
?>