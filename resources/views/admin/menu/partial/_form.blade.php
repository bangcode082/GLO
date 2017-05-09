

<div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">
	{!! Form::label('nama', 'Nama Menu') !!}
	{!! Form::text('nama', null, ['class'=>'form-control']) !!}
	{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {!! $errors->has('harga') ? 'has-error' : '' !!}">
	{!! Form::label('harga', 'Harga Menu') !!}
	{!! Form::number('harga', null, ['class'=>'form-control']) !!}
	{!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {!! $errors->has('jenis') ? 'has-error' : '' !!}">
	{!! Form::label('harga', 'Jenis Menu') !!}
	{!! Form::select('jenis', [''=>'Semua status']+App\Menu::statusList(),
	isset($jenis) ? $jenis : null, ['class'=>'form-control']) !!}
	{!! $errors->first('jenis', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('foto') ? 'has-error' : '' !!}">
	{!! Form::label('foto', 'Pilih Foto Menu (jpeg, png)') !!}
	{!! Form::file('foto') !!}
	{!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
	@if (isset($model) && $model->foto !== '')
	<div class="row">
		<div class="col-md-6">
			<p>Foto lama:</p>
			<div class="thumbnail">
				<img src="{{ url('/img/' . $model->foto) }}" class="img-rounded">
			</div>
		</div>
	</div>
	@endif
</div>

<div class="form-group {!! $errors->has('detil') ? 'has-error' : '' !!}">
	{!! Form::label('detil', 'Detil Menu') !!}
	{{ Form::textarea('detil',null, ['class'=>'form-control','id'=>'ckeditor1']) }}
	{!! $errors->first('detil', '<p class="help-block">:message</p>') !!}
</div>



{!! Form::submit(isset($model) ? 'Edit' : 'Simpan', ['class'=>'btn btn-primary']) !!}