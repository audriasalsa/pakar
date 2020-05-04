<html>
<head>
  <title>Multiple Insert</title>
  
  <!-- Load File Jquery -->
  <script src="<?php echo base_url("js/jquery.min.js"); ?>" type="text/javascript"></script>
</head>
<body>
  <h1>Form Tambah Siswa</h1>
  
  <form method="post" action="<?php echo base_url("index.php/siswa/save"); ?>">
    <!-- Buat tombol untuk menabah form data -->
    <button type="button" id="btn-tambah-form">Tambah Data Form</button>
    <button type="button" id="btn-reset-form">Reset Form</button><br><br>
    
    <b>Data ke 1 :</b>
    <table>
      <tr>
        <td>ID data latih</td>
        <td><input type="text" name="id_datalatih[]" required></td>
      </tr>
      <tr>
        <td>id pasien</td>
        <td><input type="text" name="id_pasien[]" required></td>
      </tr>
      <tr>
        <td>id gejala</td>
        <td><input type="text" name="id_gejala[]" required></td>
      </tr>
      <tr>
        <td>nilai</td>
        <td><textarea name="nilai[]" required></textarea></td>
      </tr>
      <tr>
        <td>id penyakit</td>
        <td><input type="text" name="id_penyakit[]" required></td>
      </tr>
    </table>
    <br><br>
    <div id="insert-form"></div>
    
    <hr>
    <input type="submit" value="Simpan">
  </form>
  
  <!-- Kita buat textbox untuk menampung jumlah data form -->
  <input type="hidden" id="jumlah-form" value="1">
  
  <script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append("<b>Data ke " + nextform + " :</b>" +
        "<table>" +
        "<tr>" +
        "<td>id_datalatih</td>" +
        "<td><input type='text' name='id_datalatih[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>id_pasien</td>" +
        "<td><input type='text' name='id_pasien[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>id_gejala</td>" +
        "<td><input type='text' name='id_gejala[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>nilai</td>" +
        "<td><textarea name='nilai[]' required></textarea></td>" +
        "</tr>" +
        "<tr>" +
        "<td>id_penyakit</td>" +
        "<td><input type='text' name='id_penyakit[]' required></td>" +
        "</tr>" +
        "</tr>" +

        "</table>" +
        "<br><br>");
      
      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function(){
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
  </script>
</body>
</html>