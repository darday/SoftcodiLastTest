<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contables', function (Blueprint $table) {
            $table->id('contable_id');
            $table->string('contable_name');
            $table->string('contable_last_name');
            $table->string('contable_cellphone');
            $table->string('contable_phone');
            $table->string('contable_email');
            $table->string('contable_password');
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
        Schema::dropIfExists('contables');
    }
}
