@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home ></a>
    <a href="{{route('planes.index')}}" class="bred">Aviões</a>
</div>
   
<div class="title-pg">
    <h1 class="title-pg">Gestão de Aviões</h1>
</div>

<div class="title-pg">
    <h1 class="title-pg">Listagem dos Itens</h1>
</div>

<div class="content-din bg-white">

    <div class="form-search">
        {!! Form::open(['class' => 'form form-inline']) !!}
        {!! Form::text('key_search', null, ['placeholder' => 'O que está procurando?', 'class' => 'form-control']) !!}
            <button class="btn btn-search">Pesquisar</button>
        {!! Form::close()!!}
    </div>
    <div class="messages">
        @include('panel.includes.alerts')
    </div>

    <div class="class-btn-insert">
        <a href="{{ route('planes.create')}}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Cadastrar Avião
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>#</th>            
            <th>Classe</th>
            <th>Marca</th>
            <th>Total de Passageiros</th>            
            <th width="150">Ações</th>
        </tr>

        @forelse ($planes as $plane)
            <tr>
                <td>{{ $plane->id }}</td>                                
                <td>{{ $plane->classes($plane->class) }}</td>
                <td>{{ $plane->brand->name }}</td>
                <td>{{ $plane->total_passengers }}</td>                
                <td>
                    <a href="{{route('planes.edit', $plane->id)}}" class="edit">Editar</a>
                <a href="{{route('planes.show', $plane->id)}}" class="delete">View</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhum item encontrado!</td>
            </tr>
        @endforelse
    </table>
    <!--
    @if(isset($dataForm))
        {!! $planes->appends($dataForm)->links() !!}
    @else
        {!! $planes->links() !!}
    @endif
    -->
</div><!--Content Dinâmico-->

@endsection