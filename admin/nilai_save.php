<?php
	include "koneksi.php";
	
		$sql = "INSERT INTO nilai VALUES(null, '$_POST[kriteria]', '$_POST[subkriteria]', '$_POST[nilai]', '$_POST[keterangan]')";
		$cek = mysqli_query($con, $sql);
	
	if($cek)
	{
?>
	<script type="text/javascript">
 	  window.location.href = "nilai.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "nilai.php";
	</script>
	
<?php } ?>