<table class="table table-responsive" id="experts-table">
  @if (!empty(count($experts)))
    <thead>
        <tr>
            <th>#</th>
            <th>Isim</th>
            <th colspan="2">Oran</th>
            <th colspan="3">Eylem</th>
        </tr>
    </thead>
    <tbody>
      @php
        $no = 1;
      @endphp
    @foreach($experts as $expert)
        <tr>
            <td>{!! $no++ !!}</td>
            <td>{!! $expert->nama !!}</td>
            <td>
            {!! Form::open(['route' => ['CreateKriteriaKriteria', $expert->id], 'method' => 'get']) !!}
                {!! Form::button('Kriterler', ['type' => 'submit', 'class' => 'btn btn-primary btn-xs']) !!}
            {!! Form::close() !!}
            </td>
            <td>
            {!! Form::open(['route' => ['experts.pemasokSubs.create', $expert->id], 'method' => 'get']) !!}
                {!! Form::button('Tedarikciler', ['type' => 'submit', 'class' => 'btn btn-primary btn-xs']) !!}
            {!! Form::close() !!}
            </td>
            </td>
            <td>
                {!! Form::open(['route' => ['experts.destroy', $expert->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('experts.edit', [$expert->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Emin Misin ?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
  @else
    Bos Veri
  @endif
</table>
