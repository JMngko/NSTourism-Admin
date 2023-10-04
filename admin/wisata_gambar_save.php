
<?php
	include "koneksi.php";
	$namafolder="images/wisata_baru/"; //tempat menyimpan file

		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
		
		$sql = "INSERT INTO wisata_gambar VALUES(null, '$_POST[id_wisata]', '$gambar')";
		$cek = mysqli_query($con, $sql);
			
		}
		if($cek)
		{
?>

	<script type="text/javasript">
	  alert("Berhasil diupdate!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "wisata_gambar.php?id=<?php echo $_POST['id_wis']; ?>";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
	  alert("Gagal diupdate!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "wisata_gambar.php?id=<?php echo $_POST['id_wis']; ?>";
	</script>
	
<?php } ?>
	
	