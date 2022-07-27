<!doctype html>
<html lang="tr">
  <head>
  	<title>Admin Paneli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
			
				<div class="col-12">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bunudene.jpg);"></div>

						<div class="row">
					
							<div class="col-xl-7">
							<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Giris Yap</h3>
			      		</div>
								 <!--<div class="w-100">
									 <p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
                                       
								</div>-->
			  	</div>
							<form action="" method="POST" class="signin-form">
								
							<div class="form-group mt-3">
			      			<input type="text" name="kod" class="form-control" >
			      			<label class="form-control-placeholder" for="firmakodu" style="color:#003FA4">Firma Kodu</label>
						
			      		</div>

						
						<div class="form-group mt-3">
			      			<input type="text" name="username" class="form-control my-input " >
			      			<label class="form-control-placeholder" name="username" type="text" for="username" style="color:#003FA4">Kullanıcı Adı</label>
							  
			      		</div>
		            <div class="form-group">
		              <input id="password-field" name="password" type="password" class="form-control" >
		              <label class="form-control-placeholder"  type="password" style="color:#003FA4">Şifre</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name ="submit" value ="Giriş" class=" w-100 btn submit px-3" style="background-color:#07D6E2 ; color:#FFF ">Giriş Yap</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap background-color:#07D6E2 mb-0"  style="color:#003FA4">Beni Hatırla
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right" >
										<a href="#" style="color:#003FA4">Sifremi Unuttum</a>
									</div>
			</div>
		          </form>
		          <p class="text-center">Üye değil misin? <a data-toggle="tab" style= 'color:#003FA4 ' href="#signup">KAYIT OL</a></p>
		        </div>
							</div>
						</div>

						
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
