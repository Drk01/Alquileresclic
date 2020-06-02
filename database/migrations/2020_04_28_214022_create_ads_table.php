<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cost');
            $table->enum('currency', ['USD', 'COP']);
            $table->enum('period', ['Hora', 'Día', 'Semanal', 'Mensual']);
            $table->longText('description');
            $table->string('code');
            $table->boolean('negotiable');
            $table->foreignId('profile_id');
            $table->enum('status', ['En moderación', 'Aprobado', 'Rechazado'])->default('En moderación');
            $table->string('slug');
            $table->integer('score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
