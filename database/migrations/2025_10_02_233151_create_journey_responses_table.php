<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('journey_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->integer('station_id'); // 1, 2 ou 3
            $table->integer('option_index'); // índice da opção selecionada
            $table->string('session_id')->nullable(); // para visitantes anônimos
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('journey_responses');
    }
};
