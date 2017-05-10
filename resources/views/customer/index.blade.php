<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('asset/bootstrap.min.css')}}">
	<title>MENU MAKANAN</title>
<!-- 	<script type="text/javascript" src="js/jquery-1.12.2.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script> -->
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ url('/') }}">GLO (Go onLine Order)</a>
			</div>
			<ul class="nav navbar-nav">
				<li ><a href="{{ url('halaman/food') }}">Menu Makanan</a></li>
				<li><a href="{{ url('halaman/drink') }}">Menu Minuman</a></li>
				<li><a href="{{ url('halaman/package') }}">Menu Paket</a></li>
				<li><a href="#">Menu Recommended</a></li>	
				@if(auth()->check())
				<li><a href="{{ url('home') }}">Dashboard</a></li>	
				@endif
			</ul>

			
		</div>
	</nav>

	

	
	<!-- <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default"><a href="#.php">PESAN MAKANAN</button>
			<script type="text/javascript">window.alert(Terimakasih...Anda Berhasil Memesan Makanan ^_^)</script>
			<a href="menumakanan.php">Cancel</a>
		</div>
	</div> -->

	<div class="container">
		@yield('content')

	</div>

	
	<div class="container-fluid" style="background-color: black; height: 150px;" >
		<footer align="center" style="margin-top: 50px; color: white;">
			Copyright &copy DianOjaMike : GLO (Go onLine Order)<br>
			Jalan Kaliurang km.14,5 Telp : 0778412328 <br>
			E-mail : goonlineorder@gmail.com
		</footer>
	</div>	
	

</body>
</html>