<?php
	include "koneksi.php";
	$sql = "DELETE FROM kriteria WHERE id_kriteria= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "kriteria.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "kriteria.php";
	</script>
	
<?php } ?>