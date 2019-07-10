<?php
  $link = mysqli_connect('db','user','test',"biodata2");
  if (isset($_GET["id"])) {

    $id = $_GET["id"];
  $namadep 	= $_POST['namadep'];
  $namabel 	= $_POST['namabel'];
  $jk 		= $_POST['jk'];
  $alamat 	= $_POST['alamat'];
  $no 		= $_POST['no'];
  $email 	= $_POST['email'];
 

  
  $query  = "UPDATE biodata2 SET 
  namaDepan='$namadep', 
  namaBelakang='$namabel',
  jenisKelamin='$jk',
  alamat='$alamat',
  noTelp='$no',
  email='$email'
  WHERE id=$id";
  
  
 
  $result = mysqli_query($link, $query);

  
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}


header("location:index.php");

?>