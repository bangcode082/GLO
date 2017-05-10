@extends('customer.index')
@section('content')

<div class="row">

	<div class="col-sm-12">			

		<div class="product-details"><!--product-details-->
			<div class="col-sm-7">
				<div class="view-product">
					<img src="{{url('img/'.$menu->foto)}}" class="img-responsive" alt="" style="width: 400px" />

				</div>
			</div>

			<div class="col-sm-5">

				<div class="product-information"><!--/product-information-->
					<h2>{{ $menu->nama }}</h2>
					<span>
						<span>Rp {{ number_format($menu->harga,2) }}</span>
						<br>
					</span>

					<a href="#" class="btn btn-warning">Pesan</a>

				</div><!--/product-information-->
			</div>
		</div><!--/product-details-->

		<div class="category-tab shop-details-tab"><!--category-tab-->
			<div class="col-sm-12" style="margin-bottom: 20px; margin-top: 20px;">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#reviews" data-toggle="tab">Detail Makanan</a></li>

				</ul>
			</div >
			<div class="tab-content">						

				<div class="tab-pane fade active in" id="reviews" >
					<div class="col-sm-12">
						

						<span><i>{{ date('d F Y',strtotime($menu->updated_at)) }}</i></span><br><br>
						
						<p>{!! $menu->detil !!}</p><br><br><hr>
						
					</div>
				</div>

			</div>
		</div><!--/category-tab-->

	</div><!--/category-tab-->




</div>

@endsection