<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('vinos',function(Blueprint $table){
            // $table->string('id', 50)->primary(); // Esto creará automáticamente una columna id como tipo bigIncrements y la marcará como clave primaria.


            // $table->string('name', 45)->nullable();

            // $table->timestamps();//El timestampsmétodo crea created_atcolumnas updated_at TIMESTAMPequivalentes con una precisión opcional (dígitos totales):

            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();


        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('vinos');
    }

};


