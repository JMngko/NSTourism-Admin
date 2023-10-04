<?php
	include "koneksi.php";
	$sql = "DELETE FROM kategori WHERE id_kategori= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "kategori.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "kategori.php";
	</script>
	
<?php } ?>