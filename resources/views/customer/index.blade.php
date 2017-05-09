<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

	<!-- Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

	<style>

		h3{
			text-align: center;
			padding: 30px;
			font-family: calibri;
			font-size: 40px;
			color: white;
		}
	</style>
</head>
<body background="{{ url('background/3.jpg') }}">
	

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">GLO (Go onLine Order)</a>
			</div>
		</div>
	</nav>

	<div class="container" align="center">

		<div class="row">
			<div class="col-md-6 col-md-offset-3" style="background-color: rgba(0,0,0,0.7);width: 600px; min-height: 200px;">    
				<h3>SELAMAT DATANG DI GLO, SILAHKAN ORDER</h3><br><br><br>

				<form class="form-horizontal" method="post" action="#">
					<div class="form-group">
						<label class="col-sm-2 control-label" style="color: white;"><b>Nama Pelanggan</b></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" required>
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label" style="color: white;"><b>Nomor meja</b></label>
						<div class="col-sm-7">
							<input type="number" class="form-control" name="harga" maxlength="50" placeholder="Masukkan Nomor Meja Anda" required>
						</div>
					</div>
					<button type="button" class="btn btn-success"><a href="#"><b>START</b></a></button>
				</form>

			</div>
		</div>
	</div>

</body>
</html>