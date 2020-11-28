<?php 

	//set timezone 	WIB
date_default_timezone_set("Asia/Jakarta");

	// Hari H
$goals_time = mktime(0,0,0,2,17,2021);
echo "Hari H :$goals_time </br>";

	// waktu sekarang
$current_time = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
echo "Hari ini : 	$current_time </br></br>";

	//mencari selisih waktu
$gap = $goals_time - $current_time;
echo "Selisih waktu : $gap </br></br>";

	//Mengubah ke hari, jam, menit, detik

		 // mencari jumlah sisa ahri 
		 // hari 1 jam = 3600 detik -> 1 hari = 24 x 3600 = 86.400

		 # dibagi dengan detik dalam sehari karena hasil mktime() adalah dalam satuan milisecond atau detik

$hari = floor($gap/86400);
$day = $gap/86400;
echo "Jumlah hari : $hari</br>";
echo "Jumlah day : $day</br>";

		// mencari jumlah sisa jam 


$sisaDetik1 = $gap%86400;
echo "Sisa detik setelah diketahui jumlah harinya: $sisaDetik1 </br></br>";

			// 1 jam 3600 detik
$jam = floor($sisaDetik1 / 3600);
echo "Jumlah jam : $jam </br>";

$sisaDetik2 = $sisaDetik1 % 3600;
echo "Sisa detik setelah diketahui jam : $sisaDetik2 </br></br>";

		//mencari jumlah sisa menit 

$menit = floor($sisaDetik2/60);
echo "Jumlah menit : $menit </br>";

$detik = $sisaDetik2%60;
echo "Sisa detik setelah diketahui menitnya : $detik </br></br>";



echo "<h1> $hari hari $jam menit $detik detik </h1> </br></br>";

echo "Waktu saat ini: ".date("d-m-Y H:i:s")."<br>";
echo "Masih: ".$hari." hari ".$jam." jam ".$menit." menit ".$detik." detik lagi, menuju tahun baru 1 Januari 2011";








?>