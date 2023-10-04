<?php
session_start();
include "koneksi.php";


	if((!isset($_POST['usernames'])) || (!isset($_POST['passwords'])))
	{
		?>
			<script type="text/javascript">
				window.location.href = "loginform.php";
			</script>
			<?php
	}

	$username = $_POST['usernames']; 
	$password = $_POST['passwords'];

	$username = addslashes($username);
	$username = stripslashes($username); 
	$username = mysqli_real_escape_string($con, $username); 
	$username = htmlspecialchars($username); 
	$username = mysqli_escape_string($con, $username);

	$password = addslashes($password);
	$password = stripslashes($password); 
	$password = mysqli_real_escape_string($con, $password); 
	$password = htmlspecialchars($password); 
	$hashpass = mysqli_escape_string($con, hash("sha256",$password));

	$sqlx = "SELECT count(id_admin) as cek FROM admin WHERE password = '$password' AND username = '$username'";
	$hasilx = mysqli_query($con, $sqlx);
	$datax = mysqli_fetch_array($hasilx);
	
	//kalau ada yang satu baris hasil, berarti valid
	if($datax['cek']!=0) 
	{
			$sqlxx = "SELECT * FROM admin WHERE password = '$password' AND username = '$username'";
			$hasilxx = mysqli_query($con, $sqlxx);
			$dataxx = mysqli_fetch_array($hasilxx);

			$_SESSION['idadm'] = $dataxx['id_admin'];
			$_SESSION['loginadm'] = true;
			$_SESSION['passadm'] = $password;	
			$_SESSION['useradm'] = $username;				
			?>
			<script type="text/javascript">
				window.location.href = "index.php";
			</script>
			<?php
		
	}
	//kalau tidak kembali ke login
	else
	{
		?>
			<script type="text/javascript">
				window.alert("Username/Password Incorrect!");		
			</script>
			<script type="text/javascript">
				window.location.href = "loginform.php";
			</script>
		<?php
	}

?>


	
