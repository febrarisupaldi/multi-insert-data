<?php

?>
<html>
<head>
<link href="bootstrap.min.css" rel="stylesheet">
<script src="jquery.min.js"></script>
<script>
function mintaData(){
	var jumlah;
	var i = 1;
	jumlah = document.getElementById("hasil");
	var valData = $('#jumlahData').val();
    if(valData == 0 || valData == null){
		alert("Data Tidak Boleh Kosong atapun Angka 0");
	}
    else if(isNaN($('#jumlahData').val()) == true){
		alert("Harus Angka");
	}
	else if(valData!="" || valData!=0){
		$(document).ready(function(){
				$("#minta").toggle();
			});
		for(i=0;i<valData;i++){
			jumlah.innerHTML += "<tr  style='border:1px solid black'><td align='center'>"+(i+1)+"</td><td><input type='text' name='Barang["+i+"][Kd_Brg]'></td><td><input type='text' name='Barang["+i+"][Kd_Jns_Brg]'></td><td><input type='text' name='Barang["+i+"][Nm_Brg]'></td></tr>";
		}
		document.getElementById("param").value = valData;
		document.getElementById("simpan").innerHTML += "<input type='submit' value='Simpan' name='simpan' class='btn btn-default'>";
	}
	 
}
function clearData(){
	
}
function submit(){
	var keycode;
	if (window.event) keycode = window.event.keyCode;
	else if (e) keycode = e.which;
	else return true;

	if (keycode == 13)
	   {
		mintaData();
	   }
	else
	   return true;
}
</script>
</head>
<body>
<div class="container">
	<div id="minta">
		<p>Jumlah Data</p>
		<input type="text" name="JumlahData" id="jumlahData" onkeypress="submit()"> <button id="go" onclick="mintaData()" class="btn btn-info">Go</button>
		<br />
		<br />
	</div>
	<form class="form-horizontal" method="POST">
	<input type="hidden" value="" id="param" name="banyakData">
	<table width="800" id="hasil" class="table table-bordered">
	<thead>
		<tr align="center">
			<th>No</th>
			<th>Kode Barang</th>
			<th>Kode Jenis Barang</th>
			<th>Nama Barang</th>
			
		</tr>
	</thead>
	</table>
	<div id="simpan">
	</div>

	</form>
</div>
<div id='tampungan1'></div>
</body>
</html>