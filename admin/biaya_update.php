<?php
	include "koneksi.php";
	
		$sql="UPDATE biaya SET biaya_awal = '$_POST[biaya_awal]', biaya_akhir ='$_POST[biaya_akhir]', keterangan ='$_POST[keterangan]', nilai ='$_POST[nilai]' WHERE id_biaya = '$_POST[id_biaya]'";
		$cek=mysqli_query($con, $sql);
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