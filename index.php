<!doctype html>
<html lang="tr">
  <head>
  	<title>Admin Paneli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<body>
	<div class="container" id="login-container">
	
	<div class="login-screen">
		<div class="row">
			<div class="col-12">
				<div class="image-container">
					<img src="images/logo.png">
				</div>
			</div>
			<div class="col-xl-5 p-4 d-flex flex-column justify-content-center align-items-center left-col">
				<a href="" class="btn btn-giris mb-3">
					GİRİŞ YAP
				</a>
				<a href="" class="mb-3">KAYIT OL</a>
				<a href="">ŞİFREMİ UNUTTUM</a>
			</div>
			<div class="col-xl-7 py-2 px-5">
				<form action="">
				<div class="mb-3  ">
				<label for="exampleFormControlInput1" id="firmakodu" class="form-label">Firma Kodu
				</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" >
				</div>
				<div class="mb-3">
				<label for="exampleFormControlInput1" id="kul" class="form-label">Kullanıcı Adı</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" >
				</div>
				<div class="mb-3">
				<label for="exampleFormControlInput1" id="sifre" class="form-label">Şifre</label>
				<input type="email" class="form-control" id="exampleFormControlInput1">
				</div>
				

				
				</form>
			</div>
			 <div class="offset-xl-5 col-xl-7 px-5 d-flex pt-0 justify-content-between align-items-center pb-3">

			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			
	
			<label class="form-check-label" for="flexCheckDefault" >
					Beni Hatırla
				</label>
				
			</div>

			<button class=" btn-primary" id="girisyap">Giriş yap</button>
			

			</div>
		<!--	<div class="offset-xl-9 col-xl-7 py- -2">
			<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Beni Hatırla
  </label>
</div>
-->
			</div>
		</div>
		

	</div>





	</div>

	<script src="js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
<?php
if(@$_POST["submit"]){
	$username = "root";
	$password =md5("12345");
	$code =md5(0000);
    $md5sifre =md5($_POST["password"]);
    if($_POST["username"] == $username && md5($_POST["password"]) == $password && md5($_POST["kod"] == $code ) ) {
    //giriş yapsın

    $_SESSION["girisKontrol"] = 1; //giriş yapmış
    $_SESSION["username"] = $_POST["username"];

   // header("Location: index.php");
    $message = "Başarılı bir şekilde giriş yaptınız";
 	echo "<script type='text/javascript'>alert('$message');</script>";

    }else{
		$message = "Giriş Başarısız";
		echo "<script type='text/javascript'>alert('$message');</script>";	}
 
}




?>

	</body>
</html>

<!-- echo "<span style= 'color:#003FA4 ' class=' w-50 '>ŞİFREMİ UNUTTUM</span>" ; -->
