<?php
	include "koneksi.php";
	$sql = "DELETE FROM nilai WHERE id_nilai= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "nilai.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "nilai.php";
	</script>
	
<?php } ?>