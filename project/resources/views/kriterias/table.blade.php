<table class="table table-responsive" id="kriterias-table">
  @if(!empty(count($kriterias)))
    <thead>
        <tr>
            <th>#</th>
            <th>Isim Kriterleri</th>
            <th></th>
            <th colspan="3">Eylem</th>
        </tr>
    </thead>
    <tbody>
    <?php $num = 1 ?>
    @foreach($kriterias as $kriteria)
        <tr>
            <td>{!! $num++ !!}</td>
            <td>{!! $kriteria->nama_kriteria !!}</td>
            <td>
            {!! Form::open(['route' => ['kriterias.SubKriterias.create', $kriteria->id], 'method' => 'get']) !!}
                {!! Form::button('Alt Kriterler', ['type' => 'submit', 'class' => 'btn btn-primary btn-xs']) !!}
            {!! Form::close() !!}
            </td>

            <td>
                {!! Form::open(['route' => ['kriterias.destroy', $kriteria->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('kriterias.edit', [$kriteria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Emin Misin ?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
  @else
    Bos Veri.
  @endif
</table>
