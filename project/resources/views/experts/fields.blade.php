<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Isim:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Kaydet', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('experts.index') !!}" class="btn btn-default">Iptal</a>
</div>
