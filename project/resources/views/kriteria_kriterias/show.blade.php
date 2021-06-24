@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kriterler
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('kriteria_kriterias.show_fields')
                    <a href="{!! route('kriteriaKriterias.index') !!}" class="btn btn-default">Geri</a>
                </div>
            </div>
        </div>
    </div>
@endsection
