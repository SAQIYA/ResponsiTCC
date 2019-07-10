<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $namadep = $_POST['namadep'];
  $namabel = $_POST['namabel'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $no = $_POST['no'];
  $email = $_POST['email'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO biodata2 VALUES (NULL, '$namadep', '$namabel', '$jk','$alamat',$no,'$email')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index.php");
?>