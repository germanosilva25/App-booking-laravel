<?php
/*
O namespace serve para indicar para o laravel
o caminho desse arquivo. Assim como você precisa
incluir funcionalidades de outro arquivos em um
arquivo atual, usando a função include, no Laravel 
esse import é feito usando a função use.
*/
namespace App\Http\Controllers;
/*
O uso dessa função use é para poder utilizar ass funcionalidades
do arquivo na página atual. Dessa forma, é necessário indicar o namespace
e por último indicar o nome da classe
*/

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends BaseController
{
    public function index(){
        $nome = "Victor";
        return "Hello, world! $nome!";
    }

    public function taravis(){
        $nomes = [
            "Maria",
            "Joaquim",
            "Bezerra",
            "Marta",
            "Sara",
            "Neymar"
        ];
        return $nomes;
    }
}





