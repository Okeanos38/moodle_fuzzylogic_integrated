<table class="table table-responsive" id="subKriteriaSubKriterias-table">
    <thead>
        <tr>
        <th>#</th>
        <th>Uzman</th>
        <th>Alt Kriter 1</th>
        <th>Puan</th>
        <th>Alt Kriter 2</th>
            <th colspan="3">Eylem</th>
        </tr>
    </thead>
    <tbody>
      @php
        $no = 1;
      @endphp
    @foreach($subKriteriaSubKriterias as $subKriteriaSubKriteria)
        <tr>
            <td>{!! $no++ !!}</td>
            <td>{!! $subKriteriaSubKriteria->expert->nama !!}</td>
            <td>{!! $subKriterias[$subKriteriaSubKriteria->sub_kriteria1_id] !!}</td>
            <td>{!! $subKriteriaSubKriteria->nilai !!}</td>
            <td>{!! $subKriterias[$subKriteriaSubKriteria->sub_kriteria2_id] !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('subKriteriaSubKriterias.edit', [$subKriteriaSubKriteria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
