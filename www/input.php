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
    <h1>Input Data</h1>
    <div class="container">
      <form id="id" action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Penduduk</legend>
          <p>
            <label for="noKTP">No Ktp : </label>
            <input type="text" name="noKTP" id="noKTP">
          </p>
          <p>
            <label for="namaPanjang">Nama Panjang: </label>
            <input type="text" name="namaPanjang" id="namaPanjang">
          </p>
          <p>
            <label for="jk" >Jenis Kelamin : </label>
              <select name="jk" id="jk">
                <option value="Laki-Laki">Laki-Laki </option>
                <option value="Perempuan">Perempuan</option>
              </select>
          </p>
          <p>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat">
          </p>
          <p >
            <label for="statusKawin">Status Kawin : </label>
            <input type="text" name="statusKawin" id="statusKawin">
          </p>
		  <p >
            <label for="pekerjaan">pekerjaan : </label>
            <input type="text" name="pekerjaan" id="pekerjaan">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>