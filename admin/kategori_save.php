<?php
	include "koneksi.php";
	$namafolder="images/kategori/"; //tempat menyimpan file
	
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
		
		$sql = "INSERT INTO kategori VALUES(null, '$_POST[nama_kategori]', '$gambar')";
		$cek = mysqli_query($con, $sql);
			
		}
		if($cek)
		{
?>

	<script type="text/javasript">
	  alert("Berhasil diupdate!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "kategori.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
	  alert("Gagal diupdate!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "kategori.php";
	</script>
	
<?php } ?>
	
	