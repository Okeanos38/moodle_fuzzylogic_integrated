@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Alt Kriterler
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('sub_kriterias.show_fields')
                    <a href="{!! route('subKriterias.index') !!}" class="btn btn-default">Geri</a>
                </div>
            </div>
        </div>
    </div>
@endsection
