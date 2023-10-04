<?php
	include "koneksi.php";
	$namafolder = "images/restoran/"; //tempat menyimpan file
		
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
				
		$sql = "UPDATE restoran SET nama = '$_POST[nama]', alamat = '$_POST[alamat]',
				daerah = '$_POST[daerah]', koordinat = '$_POST[koordinat]', 
				no_tlp = '$_POST[no_tlp]', kategori = '$_POST[kategori]', gambar = '$gambar',
				deskripsi = '$_POST[deskripsi]' WHERE id = '$_POST[id]'";
		$cek = mysqli_query($con, $sql);
		}else{
		$sql = "UPDATE restoran SET nama = '$_POST[nama]', alamat = '$_POST[alamat]',
				daerah = '$_POST[daerah]', koordinat = '$_POST[koordinat]', 
				no_tlp = '$_POST[no_tlp]', kategori = '$_POST[kategori]',
				deskripsi = '$_POST[deskripsi]' WHERE id = '$_POST[id]'";
		$cek = mysqli_query($con, $sql);
		}
		if($cek){
?>

	<script type="text/javasript">
	  alert("Berhasil diupdate!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "wisata.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
	  alert("Gagal diupdate!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "wisata.php";
	</script>
	
<?php } ?>