@extends('layouts.app')

@section('content')
    <section class="content-header">
      @if($selectedKri != null && $selectedSub !=null)
        <h1>
            Karsilastirma Girisi <strong>{!! $selectedSub->nama_sub_kriteria !!} ({!! $selectedKri->nama_kriteria !!})</strong> tarafindan <strong>{!! $expert->nama !!}</strong>
        </h1>
      @endif
      <h1 class="pull-right">
        {!! Form::open(['route' => ['dPSub', $expert->id], 'method' => 'delete']) !!}
        {!! Form::button('Hepsini Sil', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Emin Misin ?')"]) !!}
        {!! Form::close() !!}
      </h1>
    </section>
    <div class="content">
      <div class="clearfix"></div>

      @include('flash::message')

      <div class="clearfix"></div>
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                  @if($pemasok1 != null && $pemasok2 != null)
                    {!! Form::open(['route' => 'pemasokSubs.store']) !!}

                        @include('pemasok_subs.fields')

                    {!! Form::close() !!}
                  @else
                    <strong>Karsilastirma Gerceklestirildi !</strong>
                  @endif
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="box box-primary">
                <div class="box-body">
                        @include('pemasok_subs.table2')
                </div>
            </div>
        </div>
    </div>
@endsection
