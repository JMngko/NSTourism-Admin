<?php
	include "koneksi.php";
	$namafolder="images/transportasi/"; //tempat menyimpan file
	
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) { 
	
		$sql = "INSERT INTO transportasi VALUES(null, '$_POST[nama]', '$_POST[kategori]', '$_POST[deskripsi]', '$gambar')";
		$cek = mysqli_query($con, $sql);
		}
		if($cek){
		
?>
	<script type="text/javascript">
		alert("berhasil disimpan!");
	</script>
	<?php }else{ ?>
	<script type="text/javascript">
		alert("gagal disimpan");
	</script>
	<?php } ?>
	<script type="text/javascript">
		window.location.href = "transportasi.php";
	</script>