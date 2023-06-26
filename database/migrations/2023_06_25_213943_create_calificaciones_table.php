<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table-> char('calificacion',2);
            $table->char('estudiante',30);
            $table->char('materia', 30);
            $table->primary('calificacion',2);
            $table-> foreign('estudiante')-> references('codestudiante') -> on('estudiantes');
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
        Schema::dropIfExists('calificaciones');
    }
    public function calificaciones()
{
        return $this->hasMany(Calificacion::class)->onDelete('cascade');
}
};
