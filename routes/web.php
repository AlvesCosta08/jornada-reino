<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JourneyController;

// Página inicial
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Jornada espiritual
Route::get('/jornada', [JourneyController::class, 'start'])->name('journey.start');
Route::get('/jornada/estacao/{id}', [JourneyController::class, 'station'])
    ->name('station.show')
    ->where('id', '[1-9][0-9]*');
Route::get('/encontro', [JourneyController::class, 'showFinal'])->name('journey.final');


// Pedido de oração
Route::get('/pedido-oracao', [JourneyController::class, 'showPrayerForm'])->name('prayer.request');
Route::post('/pedido-oracao', [JourneyController::class, 'storePrayerRequest'])->name('prayer.store');

// Rota de teste (opcional, apenas em local)
if (app()->environment('local')) {
    Route::get('/teste', function () {
        return response()->json([
            'message' => '✅ Sistema funcionando perfeitamente!',
            'animations' => 'Ativas 🎭',
            'next_step' => 'Criar controller'
        ]);
    });
}
