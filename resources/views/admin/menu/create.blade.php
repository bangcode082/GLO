@extends('layouts.app')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Manajemen Menu</div>
				<div class="panel-body">
					<h3>Tambah Menu</h3>
					{!! Form::open(['route' => 'menu.store','files'=>true])!!}
					@include('admin.menu.partial._form')
					{!! Form::close() !!}
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection