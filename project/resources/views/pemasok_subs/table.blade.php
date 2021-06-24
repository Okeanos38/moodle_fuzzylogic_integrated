<table class="table table-responsive" id="pemasokSubs-table">
    <thead>
        <tr>
            <th>Tedarikciler 1 Id</th>
        <th>Puan</th>
        <th>Tedarikciler 2 Id</th>
        <th>Kriterler Id</th>
            <th colspan="3">Eylem</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pemasokSubs as $pemasokSub)
        <tr>
            <td>{!! $pemasokSub->pemasok1_id !!}</td>
            <td>{!! $pemasokSub->nilai !!}</td>
            <td>{!! $pemasokSub->pemasok2_id !!}</td>
            <td>{!! $pemasokSub->kriteria_id !!}</td>
            <td>
                {!! Form::open(['route' => ['pemasokSubs.destroy', $pemasokSub->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pemasokSubs.show', [$pemasokSub->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pemasokSubs.edit', [$pemasokSub->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Emin Misin ?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>