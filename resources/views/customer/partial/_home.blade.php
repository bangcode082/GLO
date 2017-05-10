@extends('customer.index')
@section('content')
@if($jenis==null)
<h3 style="margin-bottom: 50px">Semua Menu</h3>
@else
<h3 style="margin-bottom: 50px">Menu {{ $menu->first()->human_status }}</h3>
@endif

<div class="row">
	@foreach($menu as $val)

	<div class="col-md-3" style="margin-bottom: 50px;">
		<div class="card" style="width: 20rem; ">
			<div style="height: 200px">
				<img class="card-img-top" src="{{ url('img/'.$val->foto) }}" alt="Card image cap" style="width: 200px; ">
			</div>

			<div class="card-block" >
				<h4 class="card-title">{{$val->nama}}</h4>
				<span class="label label-success">{{$val->human_status}}</span>
				<h4 class="card-title">Rp {{ number_format($val->harga, 2) }}</h4>
				<p class="card-text" >
					{{substr($val->detil,0,20)}}
				</p>
				<span></span>
				<a href="{{ url('detil-menu/'.$val->id) }}" class="btn btn-xs btn-primary">Detil</a>
				<a href="#" class="btn btn-xs btn-warning">Pesan</a>
			</div>
		</div>
	</div>

	@endforeach


</div>
<div>
	{{$menu->links()}}
</div>

@endsection