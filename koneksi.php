<?php



 $hostname   = "localhost";

 $username = "root";

 $pass     = "";

 $db       = "jurnal";

 $con     = new mysqli($hostname, $username, $pass, $db);

 if($con==false){

  die("koneksi gagal". $con->connect_error);

 }

  if (isset($_POST['submit'])) {

   $nama=$_POST['nama'];

   $nim=$_POST['nim'];

   $kelas=$_POST['kelas'];

   $hobi=$_POST['hobi'];

   $fakultas=$_POST['fakultas'];

   $alamat=$_POST['alamat'];

 

 $sql="INSERT INTO mahasiswa(nama,nim,kelas,hobi,fakultas,alamat) VALUES ('$nama','$nim','$kelas','$hobi','$fakultas','$alamat')";

   if(mysqli_query($con,$sql)){

    echo "Database sudah masuk";

   }else{

    echo "error";

   }

}

 ?>