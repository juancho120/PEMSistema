<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('level', [
                'Sin Estudios',
                'Primaria Incompleta',
                'Primario',
                'Secundario Incompleto',
                'Secundario',
                'Terciario Incompleto',
                'Terciario',
                'Universitario Incompleto',
                'Universitario',
                'Otro'
            ]);
            $table->string('other')->nullable();
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
        Schema::dropIfExists('studies');
    }
}
