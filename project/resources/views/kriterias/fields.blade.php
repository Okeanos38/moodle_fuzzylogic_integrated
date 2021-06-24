<!-- Nama Kriteria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kriteria', 'Olcut Adi:') !!}
    {!! Form::text('nama_kriteria', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Kaydet', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('kriterias.index') !!}" class="btn btn-default">Iptal</a>
</div>
