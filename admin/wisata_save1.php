<?php
	include "koneksi.php";
	$namafolder="images/wisata/"; //tempat menyimpan file

		// $data = '';
		// $fas = $_POST['fasilitas'];
		// foreach ($fas as $a=>$value) 
		// {
		// 	$data = ', '.$value;  
		// }

		$data = implode(",", $_POST['fasilitas']);
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
		
		$sql = "INSERT INTO wisata VALUES(null, '$_POST[daerah]', '$_POST[biaya]', '$_POST[nama_wisata]', '$_POST[alamat]', '$_POST[kecamatan]', '$_POST[kategori]', '$data', '$_POST[lng]', '$_POST[lat]', '$_POST[biaya2]', '$gambar', '$_POST[deskripsi]', '$_POST[video]')";
		$cek = mysqli_query($con, $sql);
			
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
	
	