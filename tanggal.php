<?php 

	//set timezone 	WIB
	date_default_timezone_set("Asia/Jakarta");

	// Hari H
	$goals_time = mktime(0,0,0,3,8,2021);


	// waktu sekarang
	$current_time = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));


	//mencari selisih waktu
		$gap = $goals_time - $current_time;


	//Mengubah ke hari, jam, menit, detik

		 // mencari jumlah sisa ahri 
		 // hari 1 jam = 3600 detik -> 1 hari = 24 x 3600 = 86.400

		 # dibagi dengan detik dalam sehari karena hasil mktime() adalah dalam satuan milisecond atau detik

			$hari = floor($gap/86400);
			$day = $gap/86400;


		// mencari jumlah sisa jam 
			$sisaDetik1 = $gap%86400;

				// 1 jam 3600 detik
					$jam = floor($sisaDetik1 / 3600);


					$sisaDetik2 = $sisaDetik1 % 3600;


		//mencari jumlah sisa menit 

			$menit = floor($sisaDetik2/60);

			$detik = $sisaDetik2%60;


echo "<h1> ".$hari."<small>  hari </small>". $jam." <small> jam </small>". $menit ."<small> menit </small>". $detik." <small> detik</small> </h1> </br></br>";

?>