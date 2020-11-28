<!DOCTYPE html>
<html>
<head>
	<title>Countdown</title>

	<script type="text/javascript">


		function ajax() {
			
			if (window.XMLHttpRequest) {

				// untuk IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			}else{

				// untuk IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange=function(){

				if (xmlhttp.readyState==4 && xmlhttp.status==200) {

					 // hasil pembacaan script date.php akan ditampilkan di komponen id="hasil"
					 document.getElementById("hasil").innerHTML = xmlhttp.responseText;
					}
				}

				// menjalankan script date.php secara asynchromous
				xmlhttp.open("GET", "date.php", true);
				xmlhttp.send();

				//refresh time 1 detik
				setTimeout("ajax()", 1000);

			}
		</script>
	</head>

	<body onload="ajax()">
		<div id="hasil">
			
		</div>
	</body>
	</html>