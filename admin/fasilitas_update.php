<?php
	include "koneksi.php";
	
	$namafolder = "images/fasilitas/"; //tempat menyimpan file
	
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
	
		$sql="UPDATE fasilitas SET nama_fasilitas = '$_POST[nama_fasilitas]', gambar = '$gambar' WHERE id_fasilitas = '$_POST[id_fasilitas]'";
		$cek=mysqli_query($con, $sql);
		}else{
		$sql="UPDATE fasilitas SET nama_fasilitas = '$_POST[nama_fasilitas]' WHERE id_fasilitas = '$_POST[id_fasilitas]'";
		$cek=mysqli_query($con, $sql);
		}
		if($cek)
		{
?>
	<script type="text/javascript">
 	  window.location.href = "fasilitas.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "fasilitas.php";
	</script>
	
<?php } ?>