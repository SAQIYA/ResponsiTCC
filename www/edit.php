<?php
  // memanggil file koneksi.php untuk membuat koneksi
  $link = mysqli_connect('db','user','test','Penduduk');

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data  dari database yang mempunyai id=$id
    $query = "SELECT * FROM dataPenduduk WHERE id='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errstatusKawin($link).
         " - ".mysqli_error($link));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
	$data = mysqli_fetch_assoc($result);
	
		$ktp = $data["noKTP"];
		$nama = $data["namaPanjang"];
		$jk  = $data["jenisKelamin"];
		$alamat	 = $data["alamat"];
		$status   = $data["statusKawin"];
		$pekerjaan= $data["pekerjaan"];
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Edit dataPenduduk</h1>
    <div class="container">
      <form id="id" action="edit_proses.php?id='<?php echo $data['id']?>'" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit dataPenduduk</legend>
          <p>
            <label for="noKTP">noKTP : </label>
            <input type="text" name="noKTP" id="noKTP" value="<?php echo $noKTP ?>">
          </p>
          <p>
            <label for="namaPanjang">Nama Panjang: </label>
            <input type="text" name="namaPanjang" id="namaPanjang" value="<?php echo $namaPanjang ?>">
          </p>
          <p>
            <label for="jk" >Jenis Kelamin : </label>
              <select name="jk" id="jk">
                <option value="Laki-Laki" <?php if($data['jenisKelamin'] == 'Laki-Laki'){ echo 'selected'; } ?>>
                Laki-Laki </option>
                <option value="Perempuan" <?php if($data['jenisKelamin'] == 'Perempuan'){ echo 'selected'; } ?>>
                Perempuan</option>
              </select>
          </p>
          <p>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>">
          </p>
          <p >
            <label for="statusKawin">status Kawin  : </label>
            <input type="text" name="statusKawin" id="statusKawin" value="<?php echo $statusKawin ?>">
          </p>
		  <p >
            <label for="pekerjaan">Pekerjaan : </label>
            <input type="text" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan ?>">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>