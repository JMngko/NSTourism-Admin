<?php
	include "koneksi.php";
	
	$namafolder = "images/kategori/"; //tempat menyimpan file
	
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
	
		$sql="UPDATE kategori SET nama_kategori = '$_POST[nama_kategori]', gambar = '$gambar' WHERE id_kategori = '$_POST[id_kategori]'";
		$cek=mysqli_query($con, $sql);
		}else{
		$sql="UPDATE kategori SET nama_kategori = '$_POST[nama_kategori]' WHERE id_kategori = '$_POST[id_kategori]'";
		$cek=mysqli_query($con, $sql);
		}
		if($cek)
		{
?>
	<script type="text/javascript">
 	  window.location.href = "kategori.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "kategori.php";
	</script>
	
<?php } ?>