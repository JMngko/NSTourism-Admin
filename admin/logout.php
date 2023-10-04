<?php
    session_start();
?>
<html>
    <head>
        <title></title>
    </head>
    <body>  
        <?php
            $_SESSION['idadm'] = 0;
        	$_SESSION['loginadm'] = false;
        	$_SESSION['useradm'] = 0;
        	$_SESSION['passadm'] = 0;
        ?>
        <script type="text/javascript">
          window.location.href = "loginform.php";
        </script>
    </body>
</html>


		