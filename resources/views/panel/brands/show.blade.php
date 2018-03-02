@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home ></a>
    <a href="{{route('brands.index')}}" class="bred">Marcas ></a>
    <a href="{{route('brands.create')}}" class="bred">{{$brand->id}} </a>    
</div>
   
<div class="title-pg">
    <h1 class="title-pg">{{ $title }}</h1>
</div>

<div class="content-din">
    <ul>
        <li>
        Nome: <strong>{{$brand->name}}</strong>
        </li>
    </ul>

@if (isset($errors) && $errors->any())
<ul>
    <div class="alert alert-warning">
        @foreach ($errors->all() as $error )
        <li>{{$error}}</li>
        @endforeach
    </div>
</ul>
@endif

{!! Form::open([ 'route' => ['brands.destroy', $brand->id], 'class' => 'form form-search form-ds', 'method' => 'DELETE' ]) !!}
    <div class="form-group">
    <button class="btn btn-danger">Deletar o item: {{$brand->name}}</button>
    </div>
{!! form::close() !!}

</div><!--Content Dinâmico-->

@endsection