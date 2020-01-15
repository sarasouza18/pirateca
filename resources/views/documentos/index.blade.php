@extends('layouts.layout-interno')

@section('content')
    <div class="right_col" role="main">
        @if (Auth::check())

            <div>

                <form action="/filtro" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                               placeholder="filtrar por titulo"> <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
                    </div>
                </form>
                    <h1>Listagem de Documentos:</h1>


                @forelse ( $documentos as $documento )
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <h3>{{ $documento->titulo }}</h3>
                            <p>{{ $documento->arquivo }}</p>
                            <a class="btn" href="{{ url('documentos').'/'.$documento->id }}" > Ver +</a>
                        </div>
                    </div>
                @empty
                    <p>Nenhuma Categoria Cadastrada</p>
                @endforelse
            </div>
        @else
            <h3>Você precisa fazer o login <a href="/login">Clique para fazer o login</a></h3>
            <h3>Ir para o site <a href="/index">Ir para o site</a></h3>






         @endif

    </div>
@endsection
