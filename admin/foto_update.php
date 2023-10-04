<?php
	include "koneksi.php";
	
	$namafolder = "images/wisata/"; //tempat menyimpan file
		
		$data = implode(",", $_POST['fasilitas']);
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
	
		$sql="UPDATE wisata SET nama = '$_POST[nama]', alamat = '$_POST[alamat]',
				daerah = '$_POST[daerah]', suhu = '$_POST[suhu]', koordinat = '$_POST[koordinat]', 
				deskripsi = '$_POST[deskripsi]', nilai = '$_POST[nilai]', 
				kategori = '$_POST[kategori]', fasilitas ='$data', gambar = '$gambar', 
				biaya = '$_POST[biaya]', video = '$_POST[video]', telepon = '$_POST[telepon]',
				longitude = '$_POST[longitude]', latitude = '$_POST[latitude]' WHERE id_wisata = '$_POST[id_wisata]'";
		$cek=mysqli_query($con, $sql);
		}else{
		$sql="UPDATE wisata SET nama = '$_POST[nama]', alamat = '$_POST[alamat]',
				daerah = '$_POST[daerah]', suhu = '$_POST[suhu]', koordinat = '$_POST[koordinat]', 
				deskripsi = '$_POST[deskripsi]', nilai = '$_POST[nilai]', 
				kategori = '$_POST[kategori]', fasilitas = '$data', biaya = '$_POST[biaya]', 
				video = '$_POST[video]', telepon = '$_POST[telepon]', longitude = '$_POST[longitude]', 
				latitude = '$_POST[latitude]' WHERE id_wisata = '$_POST[id_wisata]'";
		$cek=mysqli_query($con, $sql);
		}
		if($cek)
		{
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