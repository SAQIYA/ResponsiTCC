<?php
  // memanggil file koneksi.php untuk membuat koneksi
  $link = mysqli_connect('db','user','test',"biodata2");

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data  dari database yang mempunyai id=$id
    $query = "SELECT * FROM biodata2 WHERE id='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
	$data = mysqli_fetch_assoc($result);
		$namadep = $data["namaDepan"];
		$namabel = $data["namaBelakang"];
		$jk 	 = $data["jenisKelamin"];
		$alamat  = $data["alamat"];
		$no 	 = $data["noTelp"];
		$email   = $data["email"];

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
    <h1>Edit Biodata</h1>
    <div class="container">
      <form id="id" action="edit_proses.php?id='<?php echo $data['id']?>'" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Biodata</legend>
          <p>
            <label for="namadep">Nama Depan : </label>
            <input type="text" name="namadep" id="namadep" value="<?php echo $namadep ?>">
          </p>
          <p>
            <label for="namabel">Nama Belakang: </label>
            <input type="text" name="namabel" id="namabel" value="<?php echo $namabel ?>">
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
            <label for="no">No Telp : </label>
            <input type="text" name="no" id="no" value="<?php echo $no ?>">
          </p>
		  <p >
            <label for="email">E-mail : </label>
            <input type="text" name="email" id="email" value="<?php echo $email ?>">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>