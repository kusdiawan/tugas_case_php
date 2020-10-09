<?php
$nilai = 0.0;

switch (true) {
	case (($nilai >= 80) && ($nilai <= 100)) :
		echo "Nilai : " . $nilai . " Grade nilai : A";
		break;
	case (($nilai >= 70) && ($nilai <= 79 ))  :
		echo "Nilai : " . $nilai . " Grade nilai : B";
		break;
	case (($nilai >= 0) && ($nilai <= 69 ))  :
		echo "Nilai : " . $nilai . " Grade nilai : D";
		break;
	default:
		echo "Harus lebih banyak belajar lagi";
		break;
}

?>
