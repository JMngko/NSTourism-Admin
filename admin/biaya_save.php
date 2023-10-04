<?php
	include "koneksi.php";
	
		$sql = "INSERT INTO biaya VALUES(null, '$_POST[biaya_awal]', '$_POST[biaya_akhir]', '$_POST[keterangan]', '$_POST[nilai]')";
		$cek = mysqli_query($con, $sql);
	
	if($cek)
	{
?>
	<script type="text/javascript">
 	  window.location.href = "biaya.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "biaya.php";
	</script>
	
<?php } ?>