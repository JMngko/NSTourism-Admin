<?php
	include "koneksi.php";
	
		$sql="UPDATE bobot SET keterangan = '$_POST[keterangan]', nilai ='$_POST[nilai_bobot]' WHERE id_bobot = '$_POST[id_bobot]'";
		$cek=mysqli_query($con, $sql);
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