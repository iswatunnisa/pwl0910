<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
if ($user=='admin'&&$pass=='password') {
	echo "<h2>
		Login Sukses!
		</h2>";
}
else {
	echo "<h2>
		Login Gagal!
		</h2>";
}
?>