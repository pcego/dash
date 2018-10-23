@extends('layouts.dashboard')
@section('page_heading','Usuários')
@section('section')

    <div class="col-sm-10">
        @section ('atable_panel_title','Usuários')
        @section ('atable_panel_body')
            @include('widgets.tabelas.user', array('class'=>'table-condensed table-bordered'))
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
    </div>

            
@stop
