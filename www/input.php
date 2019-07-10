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
        <legend>Input Biodata</legend>
          <p>
            <label for="no">no Ktp : </label>
            <input type="text" name="noKTP" id="namadep" placeholder=" ">
          </p>
          <p>
            <label for="nama">Nama Panjang: </label>
            <input type="text" name="namaPanjang" id="namaPanjang">
          </p>
          <p>
            <label for="jk" >Jenis Kelamin : </label>
              <select name="jk" id="jenisKelamin">
                <option value="Laki-Laki">Laki-Laki </option>
                <option value="Perempuan">Perempuan</option>
              </select>
          </p>
          <p>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat">
          </p>
          <p >
            <label for="status">Status Kawin : </label>
            <input type="text" name="no" id="no" placeholder=" ">
          </p>
		  <p >
            <label for="pekerjaan">pekerjaan : </label>
            <input type="text" name="email" id="email" placeholder=" ">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>