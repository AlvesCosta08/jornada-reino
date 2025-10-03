<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JourneyController; // 👈 ADICIONE ESTA LINHA
use App\Http\Controllers\Admin\PrayerRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/prayer-requests', [PrayerRequestController::class, 'index'])->name('prayer-requests');
});

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

require __DIR__.'/auth.php';
