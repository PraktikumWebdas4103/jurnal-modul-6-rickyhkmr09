<form action="koneksi.php" method="POST">
	<h2>Pendaftaran Mahasiswa</h2>
	<br>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="D3MI4101" checked>D3MI41-01</td>
			<td><input type="radio" name="kelas" value="D3MI4102">D3MI41-02</td>
			<td><input type="radio" name="kelas" value="D3MI4103">D3MI41-03</td>
			<td><input type="radio" name="kelas" value="D3MI4104">D3MI41-04</td>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
		</tr>
		<tr>

		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="music">Musik</td>
			<td><input type="checkbox" name="hobi" value="game">Gaming</td>
			<td><input type="checkbox" name="hobi" value="dance">Dancing</td>
			<td><input type="checkbox" name="hobi" value="travel">Travelling</td>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
		</tr>
		<tr>

		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="fit">FIT</option>
				<option value="fik">FIK</option>
				<option value="fkb">FKB</option>
				<option value="feb">FEB</option>
				<option value="fte">FTE</option>
				<option value="fif">FIF</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="textarea" name="alamat"></td>
		</tr>
		<tr>

		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
			<td><input type="submit" name="submit" value="input"></td>
		</tr>
		
	</table>


<?php

 if(isset($_POST['submit'])){

  $nama=$_POST['nama'];

  $nim=$_POST['nim'];

  $kelas=$_POST['kelas'];

  $hobi=$_POST['hobi'];

  $fakultas=$_POST['fakultas'];

  $alamat=$_POST['alamat'];

  

  $error=array();

  if(strlen($_POST['nim']) >= 10){

   $error['nim']=="Harus 10";

  } if(strlen($_POST['nama']) <= 25){

   $error['nama']=="Harus 25";

  } if(empty($email)){

   $error['email']=="Email harus diisi";

  }

 }

?>