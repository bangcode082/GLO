@extends('layouts.app')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Manajemen Menu</div>
				<div class="panel-body">
					<h3>List Menu
						<small><a href="{{ route('menu.create') }}" class="btn btn-warning btn-sm">Tambah Menu</a></small>
					</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Jenis</th>
								<th>Nama</th>
								<th>Harga</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($menu as $val)
							<td>{{ $val->human_status }}</td>
							<td>{{ $val->nama }}</td>
							<td>Rp {{ number_format($val->harga, 2) }}</td>
							<td>
								{!! Form::model($val, ['route' => ['menu.destroy', $val], 'method' => 'delete', 'class' => 'form-inline','files'=>true] ) !!}		
								<a href="{{ route('menu.show',$val->id) }}" class="btn btn-xs btn-success">detil</a>
								
								{!! Form::submit('Hapus', ['class'=>'btn btn-xs btn-danger j']) !!}
								{!! Form::close()!!}
							</td>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection