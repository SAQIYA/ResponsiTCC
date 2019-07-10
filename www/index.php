<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  $link = mysqli_connect('db','user','test',"Penduduk");
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Tabel Biodata</h1>
    <center><a href="input.php">Input Data &Gt; </a></center>
    <br/>
    <table border="1">
      <tr>
        <th>No KTP</th>
        <th>Nama Panjang</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Status Kawin</th>
        <th>Pekerjaan</th>
		<th>Opsi</th>
      </tr>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM dataPenduduk";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>".$data['noKTP']."</td>"; 
        echo "<td>".$data['namaPanjang']."</td>"; 
        echo "<td>".$data['jenisKelamin']."</td>"; 
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['statusKawin']."</td>";
        echo "<td>".$data['pekerjaan']."</td>"; 
		
        // membuat link untuk mengedit dan menghapus data
        echo '<td>
          <a href="edit.php?noKTP='.$data['noKTP'].'">Edit</a> 
          <a href="hapus.php?noKTP='.$data['noKTP'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
      }
      ?>
    </table>
  </body>
</html>