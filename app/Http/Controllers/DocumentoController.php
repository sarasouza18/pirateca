<?php
/**
 * Created by PhpStorm.
 * User: Sara
 * Date: 03/12/2018
 * Time: 15:10
 */


namespace App\Http\Controllers;
use App\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\File;
use DB;


class DocumentoController extends Controller
{


    //função que armazena o arquivo
    public function index() {

        $documentos = DB::table('documentos')->get();
        return view('documentos/index', compact('documentos'));
    }


    public function store(Request $request) {
        $input = $request->except('_token');
        Documento::create($input);
        return redirect('home');
    }

    public function create() {
        return view('documentos/create');
    }


    public function documentoSingle($id,  Request $request){
        $documento = Documento::findOrFail($id);
        return view('documentos.documentos',compact('documento', 'id'));
    }


    public function insert(Request $request){
        DB::table('documentos')->insert([
            'titulo' => $request['titulo'],
            'autor' => $request['autor'],
            'idioma' => $request['idioma'],
            'tipo_documento' => $request['tipo_documento'],
            'descricao' =>$request['descricao'],
            'arquivo'=>$request->file->storeAs('public', 'arquivo')

        ]);
    }

}