// dbcon.php
<!-- //Connecting to the mysql $atabase -->
<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'gfg';

	$con = mysqli_connect($host, $user, $password, $database);

	if (!$con){
		?>
			<script>alert("Connection Unsuccessful!!!");</script>
		<?php
	}
?>
