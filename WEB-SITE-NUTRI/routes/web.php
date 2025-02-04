<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ConsultaController;
use App\Http\Middleware\ProdutosMiddleware;

// Rota para exibir a página inicial (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Rota para exibir o formulário de registro
Route::get('/registro', [UserController::class, 'showRegistroForm'])->name('usuarios.registro');

// Rota para processar o formulário de registro
Route::post('/registro', [UserController::class, 'registro'])->name('usuarios.registro');

// Rota para exibir o formulário de login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('usuarios.login');

// Rota para processar o formulário de login
Route::post('/login', [UserController::class, 'login'])->name('usuarios.login');

// Rota para a página interna (dashboard) com proteção de autenticação
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Rota para logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Rota para a página de produtos com proteção por middleware
Route::resource('produtos', ProdutoController::class)
    ->middleware(ProdutosMiddleware::class)
    ->except('show');

// Rota para exibir um único produto com proteção de autenticação
Route::get('produtos/{produto}', [ProdutoController::class, 'show'])
    ->middleware('auth')
    ->name('produtos.show');

// Rota para a página "Sobre Nós"
Route::get('/sobre-nos', function () {
    return view('pages.sobre-nos');
})->name('sobre-nos');

// Rotas para o agendamento de consultas
Route::get('/agendamento', [AgendamentoController::class, 'index'])->name('agendamento.index');
Route::post('/agendamento', [AgendamentoController::class, 'store'])->name('agendamento.submit');
Route::get('/calculadora-imc', function () {
    return view('pages.calculadora-imc'); // Corrigido para o caminho completo
});

// Rotas para Minhas Consultas
Route::get('/minhas-consultas', [ConsultaController::class, 'index'])->name('consultas.index')->middleware('auth');
Route::get('/consultas/create', [ConsultaController::class, 'create'])->name('consultas.create')->middleware('auth');
Route::get('/consultas/{consulta}/edit', [ConsultaController::class, 'edit'])->name('consultas.edit')->middleware('auth');
Route::delete('/consultas/{consulta}', [ConsultaController::class, 'destroy'])->name('consultas.destroy')->middleware('auth');

