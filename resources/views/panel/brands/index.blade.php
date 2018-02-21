@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home ></a><a href="{{route('brands.index')}}" class="bred">Marcas</a>
</div>

<div class="row"></div>
    <a href="{{ route('brands.create')}}" class="btn btn-success">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
    </a>
</div>
   
<div class="title-pg">
    <h1 class="title-pg">Marcas de Aviões</h1>
</div>

@endsection