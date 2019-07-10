<?php
  $link = mysqli_connect('db','user','test','Penduduk');
  if (isset($_GET["id"])) {

    $id = $_GET["id"];
  $ktp	= $_POST['noKTP'];
  $nama 	= $_POST['namaPanjang'];
  $jk 		= $_POST['jenisKelamin'];
  $alamat 	= $_POST['alamat'];
  $status		= $_POST['statusKawin'];
  $pekerjaan 	= $_POST['pekerjaan'];
 

  
  $query  = "UPDATE dataPenduduk SET 
  noKTP='$ktp', 
  namaPanjang='$nama',
  jenisKelamin='$jk',
  alamat='$alamat',
  statusKawin='$status',
  pekerjaan='$pekerjaan'
  WHERE id=$id";
  
  
 
  $result = mysqli_query($link, $query);

  
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}


header("location:index.php");

?>