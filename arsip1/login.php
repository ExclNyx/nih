<?php
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="assets/login.css" />
    <title>login 2</title>
  </head>
  <body>

	<!-- Box Login -->
    <div class="container">
      <?php
          if(isset($_GEt['msg'])){
            echo "<div class='alert alert-error'>".$_GET['msg']."</div>";
          }
      ?>
      <div class="login">
        <form action="" method="POST">
          <h1>Login</h1>
          <hr />
          <p>Harap Memasukkan Username dan Password Dengan Teliti!</p>
          <label for="">Username</label>
          <input type="text" name="user" placeholder="Username" class="input-control">
          <label for="">Password</label>
          <input type="password" name="pass" placeholder="Password" class="input-control">
          <input type="submit" name="submit" value="Login" class="btn">
        </form>

        <?php
            if (isset($_POST['submit'])) {
              $user = mysqli_real_escape_string($conn, $_POST['user']);
              $pass = mysqli_real_escape_string($conn, $_POST['pass']);

              $cek  = mysqli_query($conn, "SELECT * FROM user where username = '".$user."' ");
              if(mysqli_num_rows($cek) > 0){

                $d = mysqli_fetch_object($cek);
                if(md5($pass) == $d->password){

                  $_SESSION['status_login'] = true;
									$_SESSION['uid']		    = $d->id;
									$_SESSION['uname']		  = $d->nama;
									$_SESSION['ulevel']		  = $d->level;

                  echo "<script>window.location = 'owner/dashboard.php'</script>";
              }else{
                echo '<div class="alert alert-error">Password salah</div>';
              }
            }else{
              echo '<div class="alert alert-error"><b>Username tidak ditemukan</b></div>';
            }
        }
        ?>
      </div>
     
	  <!-- Image -->
      <div class="right">
        <img src="assets/img/pu.png" alt="" />
      </div>
    
	  <!-- Text -->
      <div class="tulisan">
        KEMENTERIAN<br />PEKERJAAN UMUM DAN<br />PERUMAHAN RAKYAT

        <div class="garis"></div>
        <div class="nama">APLIKASI E-ARSIP</div>
		</div>
    
    </div>
   
      </div>
    </div>
  </body>
</html>
