<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Facultad;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table-> char('codprograma',2);
            $table->char('nomprograma',30);
            $table->char('facultad', 2);
            $table->primary('codprograma',2);
            $table-> foreign('facultad')-> references('codfacultad') -> on('facultades');
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
        Schema::dropIfExists('programas');
    }

    public function programas()
{
        return $this->hasMany(Programa::class)->onDelete('cascade');
}
};
