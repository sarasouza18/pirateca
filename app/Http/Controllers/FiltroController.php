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
use App\Quotation;
use  Illuminate\Support\Facades\Input;


class FiltroController extends Controller
{
    function filtro(){
    $q = Input::get ( 'q' );
    $conteudo = Documento::where('titulo','LIKE','%'.$q.'%')->get();
        return view('documentos.filtro', compact('conteudo'));
      }


}