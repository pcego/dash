@extends('layouts.dashboard')
@section('page_heading','Relatórios')
@section('section')

    <div class="col-sm-12">
        @section ('table_panel_title','Dados')
        @section ('table_panel_body')
            @include('widgets.tabelas.arduino', array('class'=>''))
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>
            
@stop
