<html>
<head>
  <title>Multiple Insert</title>
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="<?php echo base_url("index.php/DataLatih/Form"); ?>">Tambah Data</a><br><br>
  <style>
  table {
    border-collapse: collapse;
  }
  table, td, th {
    border: 1px solid black;
  }
  </style>
  <table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>id_datalatih</th>
    <th>id_pasien</th>
    <th>id_gejala</th>
    <th>nilai</th>
    <th>id_penyakit</th>
  </tr>
  <?php
  if( ! empty($datalatih)){
    $no = 1;
    foreach($datalatih as $data){
      echo "<tr>";
      echo "<td>".$no."</td>";
      echo "<td>".$data->id_datalatih."</td>";
      echo "<td>".$data->nama_pasien."</td>";
      echo "<td>".$data->id_gejala."</td>";
      echo "<td>".$data->nilai."</td>";
      echo "<td>".$data->id_penyakit."</td>";
      echo "</tr>";
      $no++;
    }
  }
  ?>
  </table>
</body>
</html>