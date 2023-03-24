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
        Schema::table('users', function (Blueprint $table) {
            
            $table -> string('username');
            $table -> string('programa');
            $table -> string('semestre');
            $table -> string('celular');
            $table -> string('direccion');
            $table -> string('presentacion');
            $table -> string('genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('username');
            $table->dropColumn('programa');
            $table->dropColumn('semestre');
            $table->dropColumn('celular');
            $table->dropColumn('direccion');
            $table->dropColumn('presentacion');
            $table->dropColumn('genero');
            
        });
    }
};
