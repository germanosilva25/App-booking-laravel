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

    public function listaPessoas(Request $request){
        $pessoas = [
            [
                "nome" => "Maria",
                "CEP" => "24908102",
                "UF" => "MG"
            ],
            [
                "nome" => "João",
                "CEP" => "22011900",
                "UF" => "SP"
            ],
            [
                "nome" => "Joaquim",
                "CEP" => "26440332",
                "UF" => "PR"
            ],
        ];
        echo "<h1>".$request->nome."</h1>";
        echo "<h1>".$request->idade."</h1>";
        echo "
            <table border='1'>
                <tr>
                    <th width='200'>Nome</th>
                    <th width='200'>CEP</th>
                    <th width='50'>UF</th>
                </tr>";
                foreach($pessoas as $p){
                    echo "
                        <tr>
                            <td>{$p['nome']}</td>
                            <td>{$p['CEP']}</td>
                            <td>{$p['UF']}</td>
                        </tr>
                    ";
                }
        echo "
            </table>
        ";

        //return $pessoas;
    }

    public function array(){
        $letras = [
           
            [
                "A",
                "E",
                "I",
                "O",
                "U",
            ],
            [

                "B",
                "C",
                "D",
               
                "F",
                "G",
                "H",
                
                "J",
                "K",
                "L",
                "M",
                "N",
                
                "P",
                "Q",
                "R",
                "S",
                "T",
               
                "V",
                "W",
                "X",
                "Y",
                "Z"
            ],
            [
                "AO"
            ]
        ];

        return $letras[2][0];
    }
}





