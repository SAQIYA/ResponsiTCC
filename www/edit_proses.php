<?php
  $link = mysqli_connect('db','user','test','Penduduk');
  if (isset($_GET["noKTP"])) {

    $ktp	= $_POST['noKTP'];
    $nama 	= $_POST['namaPanjang'];
    $jk 		= $_POST['jk'];
    $alamat 	= $_POST['alamat'];
    $status		= $_POST['statusKawin'];
    $pekerjaan 	= $_POST['pekerjaan'];
 
    $query  = "UPDATE dataPenduduk SET 
    namaPanjang='$nama',
    jenisKelamin='$jk',
    alamat='$alamat',
    statusKawin='$status',
    pekerjaan='$pekerjaan'
    WHERE noKTP='$ktp'
    ";
  
    $result = mysqli_query($link, $query);

  
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}


header("location:index.php");

?>