<?php
$nilai=$_GET['nilai'];
if ($nilai>100||$nilai<0) {
	echo "Nilai yang anda masukkan tidak valid";
}
elseif ($nilai>80) {
	echo "Nilai Anda adalah A";
}
elseif ($nilai>60) {
	echo "Nilai Anda adalah B";
}
elseif ($nilai>40) {
	echo "Nilai Anda adalah C";
}
elseif ($nilai>20) {
	echo "Nilai Anda adalah D";
}
else {
	echo "Nilai anda adalah E";
}
?>