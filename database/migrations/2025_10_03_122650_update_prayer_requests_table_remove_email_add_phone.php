<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('prayer_requests', function (Blueprint $table) {
            $table->dropColumn('email'); // remove email
            $table->string('phone')->nullable()->after('name'); // adiciona phone
        });
    }

    public function down()
    {
        Schema::table('prayer_requests', function (Blueprint $table) {
            $table->string('email')->nullable()->after('name'); // re-adiciona email
            $table->dropColumn('phone'); // remove phone
        });
    }
};
