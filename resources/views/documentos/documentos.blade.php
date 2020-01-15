

                @extends('layouts.layout-interno')

                @section('content')
                    <div class="right_col" role="main">
                        @if (Auth::check())
                            <form method="POST" action="/documentos/{{ $documento->id }}">


                                <div class="row">
                                    <div class="col-md-12">
                                      <h4>Titulo: {{$documento->titulo}}</h4>
                                        <h5>Autor: {{$documento->autor}}</h5>
                                        <h5>Idioma: {{$documento->idioma}}</h5>


                                    </div >


                                    {{ csrf_field() }}
                                </div>



                                {{ csrf_field() }}

                            </form>


                    </div>

                    @else
                        <h3>Você precisa fazer o login <a href="/login">Clique para fazer o login</a></h3>
                        <h3>Ir para o site <a href="/index">Ir para o site</a></h3>

                        @endif

                        </div>
            @endsection
