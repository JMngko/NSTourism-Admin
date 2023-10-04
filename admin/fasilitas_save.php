<?php
	include "koneksi.php";
	$namafolder="images/fasilitas/"; //tempat menyimpan file
	
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
		
		$sql = "INSERT INTO fasilitas VALUES(null, '$_POST[nama_fasilitas]', '$gambar')";
		$cek = mysqli_query($con, $sql);
			
		}
		if($cek)
		{
?>

	<script type="text/javasript">
	  alert("Berhasil diupdate!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "fasilitas.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
	  alert("Gagal diupdate!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "fasilitas.php";
	</script>
	
<?php } ?>
	
	