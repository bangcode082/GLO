@extends('layouts.app')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Manajemen Menu</div>
				<div class="panel-body">
					<h3>Detail Menu	
					<small><a href="{{ route('menu.index') }}" class="btn btn-primary btn-sm">Kembali</a></small>					
					</h3>
					<table class="table table-hover">
						<tr>
							<th width="200px">Nama</th>
							<td>{{ $menu->nama }}</td>
						</tr>

						<tr>
							<th width="200px">Jenis</th>
							<td >{{ $menu->human_status }}</td>
						</tr>
						<tr>
							<th width="200px">Harga</th>
							<td>Rp {{ number_format($menu->harga, 2) }}</td>
						</tr>

						<tr>
							<th width="200px">Gambar</th>
							<td><img src="{{ url('img/'.$menu->foto) }}" class="img-responsive" width="500px"></td>
						</tr>

						<tr>
							<th width="200px">Detil</th>
							<td>{{ $menu->detil }}</td>
						</tr>
					</table>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection