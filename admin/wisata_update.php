<?php
	include "koneksi.php";
	
	$namafolder = "images/wisata/"; //tempat menyimpan file

		$data = implode(",", $_POST['fasilitas']);	
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
	
		$sql="UPDATE wisata SET id_daerah = '$_POST[daerah]', id_biaya ='$_POST[biaya]', nama_wisata = '$_POST[nama_wisata]', alamat = '$_POST[alamat]', kategori = '$_POST[kateogri]', fasilitas = '$data', lng = '$_POST[lng]', lat = '$_POST[lat]', biaya2 = '$_POST[biaya2]', gambar = '$gambar', deskripsi = '$_POST[deskripsi]', video = '$_POST[video]' WHERE id_wisata = '$_POST[id_wisata]'";
		$cek=mysqli_query($con, $sql);
		}else{
		$sql="UPDATE wisata SET id_daerah = '$_POST[daerah]', id_biaya ='$_POST[biaya]', nama_wisata = '$_POST[nama_wisata]', alamat = '$_POST[alamat]', kategori = '$_POST[kategori]', fasilitas = '$data', lng = '$_POST[lng]', lat = '$_POST[lat]', biaya2 = '$_POST[biaya2]', deskripsi = '$_POST[deskripsi]', video = '$_POST[video]' WHERE id_wisata = '$_POST[id_wisata]'";
		$cek=mysqli_query($con, $sql);
		}
		if($cek)
		{
?>
	<script type="text/javascript">
 	  window.location.href = "wisata.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "wisata.php";
	</script>
	
<?php } ?>