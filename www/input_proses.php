<?php
// memanggil file koneksi.php untuk melakukan koneksi database
  $link = mysqli_connect('db','user','test','Penduduk');

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $noKTP = $_POST['noKTP'];
  $nama = $_POST['namaPanjang'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $status = $_POST['statusKawin'];
  $pekerjaan = $_POST['pekerjaan'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO dataPenduduk SET
            noKTP = '$noKTP',
            namaPanjang = '$nama',
            jenisKelamin = '$jk',
            alamat = '$alamat',
            statusKawin = '$status',
            pekerjaan = '$pekerjaan'
            ";

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