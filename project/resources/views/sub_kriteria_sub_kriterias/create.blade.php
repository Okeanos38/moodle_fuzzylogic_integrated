
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Alt Kriterler Alt Kriterler
        </h1>
        <h1 class="pull-right">
          {!! Form::open(['route' => ['dSub', $kriteria->id], 'method' => 'delete']) !!}
          {!! Form::button('Hepsini Sil', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Emin Misin ?')"]) !!}
          {!! Form::close() !!}
        </h1>
    </section>
    <div class="content">
      <div class="clearfix"></div>

      @include('flash::message')
      @php
        //dd($expert);
      @endphp
      <div class="clearfix"></div>
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

          @if($fullExpert)

              <div class="clearfix"></div>
              Tum expert alt kriter karsilastirmasini doldurdu <b>{!! $kriteria->nama_kriteria!!}</b>!
              <div class="clearfix"></div>
          @else
            <div class="box-body">
              <br>
              {!! Form::open(['route' => ['kriterias.SubKriterias.create', $kriteria->id], 'method' => 'get']) !!}
                  {!! Form::button('Geri', ['type' => 'submit', 'class' => 'btn btn-default']) !!}
              {!! Form::close() !!}
              <br>
                <div class="row">
                    {!! Form::open(['route' => 'subKriteriaSubKriterias.store']) !!}

                        @include('sub_kriteria_sub_kriterias.fields')

                    {!! Form::close() !!}
                </div>
            </div>
          @endif
        </div>
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              @if (!empty(count($subKriteriaSubKriterias)))
                @include('sub_kriteria_sub_kriterias.table')
              @else
                Bos Veriler.
              @endif

            </div>
        </div>
    </div>
@endsection
