<?php
	include "koneksi.php";
	$sql = "DELETE FROM wisata_gambar WHERE id_gambar= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "wisata_gambar.php?id=<?php echo $data['id_wis']; ?>";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "wisata_gambar.php?id=<?php echo $data['id_wis']; ?>";
	</script>
	
<?php } ?>