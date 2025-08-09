<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ServicoController;

Route::get('', [UserController::class, 'index']);
Route::get('lista', [UserController::class, 'taravis']);
Route::get('lista-pessoas/', [UserController::class, 'listaPessoas']);
Route::get('lista-pessoas/{nome}', [UserController::class, 'listaPessoas']);
Route::get('lista-pessoas/{nome}/{idade}', [UserController::class, 'listaPessoas']);
Route::get('array', [UserController::class, 'array']);





// Route::get('/usuarios', [UserController::class, 'getUsuarios']);
// Route::get('/usuarios-profissional', [UserController::class, 'getProfissional']);
// Route::get('/usuarios-clientes', [UserController::class, 'getCliente']);
// Route::post('/create-usuario', [UserController::class, 'createUsuario']);
// Route::get('/deletar-usuario/{id_usuario', [UserController::class, 'deletarUsuario']);
// Route::get('/atualizar-usuario/{id_usuario}', [UserController::class, 'atualizarUsuario']);

// Route::get('/get-agenda', [AgendaController::class, 'getAgenda']);
// Route::post('/criar-agenda', [AgendaController::class, 'criarAgenda']);

// Route::get('/get-agendamentos', [AgendamentoController::class, 'getAgendamento']);
// Route::get('/preparar-agendamento', [AgendamentoController::class, 'prepararAgendamento']);
// Route::post('/preparar-agendamento', [AgendamentoController::class, 'prepararAgendamento']);
// Route::post('/criar-agendamento', [AgendamentoController::class, 'criarAgendamento']);

// Route::get('/get-servicos', [ServicoController::class, 'getServicos']);

//https://localhost/agendamentos/criar-agenda?id_usuario=1&
// dia_da_semana=2&horario_inicio=08:00&horario_final=20:00

// configurar .htaccess
// configurar exceção de csrf token

