<?php
	include "koneksi.php";
	
		$sql="UPDATE nilai SET id_kriteria = '$_POST[kriteria]', subkriteria ='$_POST[subkriteria]', nilai ='$_POST[nilai]', keterangan ='$_POST[keterangan]' WHERE id_nilai = '$_POST[id_nilai]'";
		$cek=mysqli_query($con, $sql);
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