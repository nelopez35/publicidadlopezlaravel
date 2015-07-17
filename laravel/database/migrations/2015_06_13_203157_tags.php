<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs',function($table){
                $table->string('utc');
                $table->string('anio');
                $table->string('mes');
                $table->string('dia');
                $table->string('hora');
                $table->string('minuto');
                $table->string('segundo');
                $table->string('navegador');
                $table->string('extra');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
