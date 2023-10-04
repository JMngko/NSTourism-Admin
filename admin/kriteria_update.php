<?php
	include "koneksi.php";
	
		$sql="UPDATE kriteria SET nama_kriteria = '$_POST[nama_kriteria]', atribut ='$_POST[atribut]', id_bobot ='$_POST[bobot_k]', bobot ='$_POST[bobot]'  WHERE id_kriteria = '$_POST[id_kriteria]'";
		$cek=mysqli_query($con, $sql);
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