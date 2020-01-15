@extends('layouts.layout-interno')

@section('content')

    <div class="right_col" role="main">
        @if (Auth::check())

            @forelse ( $conteudo as $cont )
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <h3>{{ $cont->titulo }}</h3>
                            <p>{{ $cont->arquivo }}</p>
                            <a class="btn" href="{{ url('documentos').'/'.$cont->id }}" > Ver +</a>
                        </div>
                    </div>
                @empty
                    <p>Nenhuma Categoria Cadastrada</p>
                @endforelse
        @else
            <h3>Você precisa fazer o login <a href="/login">Clique para fazer o login</a></h3>
            <h3>Ir para o site <a href="/index">Ir para o site</a></h3>


        @endif

    </div>

@endsection