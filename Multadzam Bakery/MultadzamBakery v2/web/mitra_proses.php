<?php
// koneksi
require 'admin/functions.php';

// cek submit sudah ditekan atau belum 
if (isset($_POST["submit"])) {
  // ambil data dari tiap elemen dalam form
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $address = htmlspecialchars($_POST["address"]);
  $add_information = htmlspecialchars($_POST["add_information"]);
  $tgl_mitra = date("Y-m-d");

  // query insert data
  $query = "INSERT INTO mitra
            VALUES
            ('', '$tgl_mitra', '$name', '$email', '$phone', '$address', '$add_information')";
  mysqli_query($conn, $query);
}
if (isset($_POST["submit"]) > 0) {
  echo "
		<script>
			alert('data berhasil terkirim!');
			document.location.href = 'mitra.php';
		</script>
	";
} else {
  echo "
		<script>
			alert('data gagal terkirim!');
			document.location.href = 'mitra.php';
		</script>
	";
}
