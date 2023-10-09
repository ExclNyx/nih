<?php

include '../koneksi.php';

//inisialisasi data
$nim = '';
$nama = '';
$telp = '';
$email = '';
$jurusan = '';

//menangkap data 
if (isset($_POST['simpan'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];

        $sql1 = "INSERT into siswa(nim,nama,telepon,email,jurusan) Values ('$nim','$nama','$telp','$email','$jurusan')";
        $q1 = mysqli_query($conn,$sql1);
        if($q1){
            echo "
            <script>
            alert('Data Berhasil Di Kirim');
            document.location.href= 'index.php';
            </script>
            ";
        } else {
            echo "
            <script>
            alert('Data Gagal Di Kirim');
            document.location.href= 'index.php';
            </script>
            ";
        }
    
}


?>