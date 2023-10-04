<?php
	include "koneksi.php";
	
		$sql = "INSERT INTO kriteria VALUES(null, '$_POST[nama_kriteria]', '$_POST[atribut]', '$_POST[bobot_k]', '$_POST[bobot]')";
		$cek = mysqli_query($con, $sql);
	
	if($cek)
	{
?>
	<script type="text/javascript">
 	  window.location.href = "kriteria.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "kriteria.php";
	</script>
	
<?php } ?>