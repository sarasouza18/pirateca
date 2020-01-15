<?php
/**
 * Created by PhpStorm.
 * User: Sara
 * Date: 03/12/2018
 * Time: 14:56
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'descricao', 'titulo','autor','idioma','tipo_documento','arquivo'
    ];
}