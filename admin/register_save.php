<?php
	include "koneksi.php";	
	$sql = "INSERT INTO admin VALUES(null, '$_POST[nama]', '$_POST[username]', '$_POST[password]')";
	$cek = mysqli_query($con, $sql);

		if($cek){
?>
	<script type="text/javascript">
		window.location.href = "loginform.php";
	</script>
	<?php
		}
	?>