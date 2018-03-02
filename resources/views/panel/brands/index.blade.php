@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home ></a><a href="{{route('brands.index')}}" class="bred">Marcas</a>
</div>
   
<div class="title-pg">
    <h1 class="title-pg">Marcas de Aviões</h1>
</div>

<div class="title-pg">
    <h1 class="title-pg">Listagem dos Itens</h1>
</div>

<div class="content-din bg-white">

    <div class="form-search">
        {!! Form::open(['route' => 'brands.search', 'class' => 'form form-inline']) !!}
        {!! Form::text('key_search', null, ['placeholder' => 'O que está procurando?', 'class' => 'form-control']) !!}
            <button class="btn btn-search">Pesquisar</button>
        {!! Form::close()!!}
    </div>
    <div class="messages">
        @if (session('success'))
            <div class="alert alert-success">
            {{session('success')}}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
            {{session('error')}}
            </div>
        @endif
    </div>

    <div class="class-btn-insert">
        <a href="{{ route('brands.create')}}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Cadastrar
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th width="150">Ações</th>
        </tr>

        @forelse ($brands as $brand)
            <tr>
                <td>{{ $brand->name }}</td>
                <td>
                    <a href="{{route('brands.edit', $brand->id)}}" class="edit">Editar</a>
                    <a href="" class="delete">Apagar</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhum item encontrado!</td>
            </tr>
        @endforelse
    </table>

    {!! $brands->links() !!}

</div><!--Content Dinâmico-->

@endsection