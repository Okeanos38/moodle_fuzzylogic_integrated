<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $subKriteria->id !!}</p>
</div>

<!-- Kriteria Id Field -->
<div class="form-group">
    {!! Form::label('kriteria_id', 'Kriter Id:') !!}
    <p>{!! $subKriteria->kriteria_id !!}</p>
</div>

<!-- Nama Sub Kriteria Field -->
<div class="form-group">
    {!! Form::label('nama_sub_kriteria', 'Alt Kriter Adi:') !!}
    <p>{!! $subKriteria->nama_sub_kriteria !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $subKriteria->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $subKriteria->updated_at !!}</p>
</div>

