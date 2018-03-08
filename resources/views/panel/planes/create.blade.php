@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home ></a>
    <a href="{{route('planes.index')}}" class="bred">Aviões ></a>
    <a href="{{route('planes.create')}}" class="bred">Cadastrar </a>    
</div>
   
<div class="title-pg">
    <h1 class="title-pg">Cadastro de Aviões</h1>
</div>

<div class="content-din">

@include('panel.includes.errors')

{!! Form::open([ 'route' => 'planes.store', 'class' => 'form form-search form-ds' ]) !!}
@include('panel.planes.form')
{!! form::close() !!}

</div><!--Content Dinâmico-->

@endsection