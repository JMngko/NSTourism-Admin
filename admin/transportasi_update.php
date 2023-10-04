<?php
	include "koneksi.php";
	$namafolder="images/transportasi/"; //tempat menyimpan file
	
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			
	$sql = "UPDATE transportasi SET nama = '$_POST[nama]', kategori = '$_POST[kategori]',  
			deskripsi = '$_POST[deskripsi]', gambar = '$gambar' WHERE id = '$_POST[id]'";
	$cek = mysqli_query($con, $sql);
		}else{
		$sql = "UPDATE transportasi SET nama = '$_POST[nama]', kategori = '$_POST[kategori]',  
			deskripsi = '$_POST[deskripsi]' WHERE id = '$_POST[id]'";
	$cek = mysqli_query($con, $sql);
		}
	if($cek){
?>
	<script type="text/javascript">
		alert("Berhasil diupdate!");
	</script>
	<script type="text/javascript">
		window.location.href = "transportasi.php";
	</script>
<?php }else{ ?>

	<script type="text/javascript">
		alert("Gagal diupdate!");
	</script>
	<script type="text/javascript">
		window.location.href = "transportasi.php";
	</script>
<?php } ?>