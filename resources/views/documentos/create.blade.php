@extends('layouts.layout-interno')

@section('content')
    <div class="right_col" role="main">
        @if (Auth::check())
            <form method="POST" action="/documentos">


                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{url('insert')}}" method="post" enctype="multipart/form-data">
                                <label for="titulo"> Digite o título</label>
                                <textarea type="text" class="form-control" name="titulo"> </textarea>
                                <br>
                                <label for="descricao">Digite a descrição</label>
                                <textarea type="text" class="form-control" name="descricao"> </textarea>
                                <br>

                                <label for="autor"> Digite o Autor</label>
                                <textarea type="text" class="form-control" name="autor"> </textarea>
                                <br>

                                <label for="tipo_documento">Escolha o tipo</label>
                                <select class="form-control" name="tipo_documento">
                                    <option value="1">Artigo</option>
                                    <option value="2">Livro</option>
                                    <option value="3">projeto</option>
                                </select>
                                <br>

                                <label for="idioma"> Digite o idioma</label>
                                <textarea type="text" class="form-control" name="idioma"> </textarea>
                                <br>

                                <label > Insira o arquivo</label>

                                <input type="file" name="arquivo" >
                                <br>
                            </form>

                        </div >
                        <div class="form-group">
                            <input type="submit" name="send" id="send" class="btn btn-primary" value="Enviar"></input>
                        </div>

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
