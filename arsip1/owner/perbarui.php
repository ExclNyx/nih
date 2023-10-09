<?php 
// koneksi database
include 'koneksi.php';
?>
<?php
// menangkap data yang di kirim dari form
$query_update = 'update user set
nim = "'.$_POST['nim'].'",
nama = "'.$_POST['nama'].'",
telp = "'.$_POST['telp'].'",
email = "'.$_POST['email'].'",
jurusan = "'.$_POST['jurusan'].'",
where id = "'.$_GET['id'].'" ';

$run_query_update = mysqli_query($conn, $query_update);

if(!$run_query_update){
    echo 'Edit Data Failed' . mysqli_error($conn);
    exit();
}

 
?>