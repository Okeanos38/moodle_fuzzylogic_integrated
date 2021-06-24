<!-- Kriteria1 Id Field -->

<div class="form-group col-sm-3">
    {!! Form::label('kriteria1_id', 'Kriter1 Id:') !!}
    {!! Form::text('', $kriteria1->nama_kriteria, ['class' => 'form-control', 'disabled']) !!}
    {!! Form::hidden('kriteria1_id', $kriteria1->id) !!}
</div>

<!-- Nilai Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nilai', 'Skor:') !!}
    {!! Form::text('nilai', null, ['class' => 'form-control', 'autofocus']) !!}
</div>
<!-- Kriteria2 Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('kriteria2_id', 'Kriter2 Id:') !!}
    {!! Form::text('', $kriteria2->nama_kriteria, ['class' => 'form-control', 'disabled']) !!}
    {!! Form::hidden('kriteria2_id', $kriteria2->id) !!}
</div>

<!-- Expert Id Field -->
    {!! Form::hidden('expert_id', $expert->id) !!}



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Kaydet', ['class' => 'btn btn-primary']) !!}
</div>
