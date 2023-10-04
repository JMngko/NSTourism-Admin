<?php
	include "koneksi.php";	
	$namafolder="images/restoran/"; //tempat menyimpan file
	
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)); {
	
		$sql = "INSERT INTO restoran VALUES(null, '$_POST[nama]', '$_POST[alamat]', '$_POST[daerah]', '$_POST[koordinat]', '$_POST[no_tlp]', '$_POST[kategori]', '$gambar', '$_POST[deskripsi]')";
		$cek = mysqli_query($con, $sql);
		}
		if($cek){
?>
	<script type="text/javasript">
	  alert("Berhasil ditambah!");
	</script>
	
	
<?php }else{ ?>

	<script type="text/javascript">
	  alert("Gagal ditambah!");
	</script>
	
	
<?php } ?>

<script type="text/javascript">
 	  window.location.href = "restoran.php";
	</script>