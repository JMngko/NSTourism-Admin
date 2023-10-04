<?php
	include "koneksi.php";
	
		$sql = "INSERT INTO bobot VALUES(null, '$_POST[keterangan]', '$_POST[nilai_bobot]')";
		$cek = mysqli_query($con, $sql);
	
	if($cek)
	{
?>
	<script type="text/javascript">
 	  window.location.href = "bobot.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "bobot.php";
	</script>
	
<?php } ?>