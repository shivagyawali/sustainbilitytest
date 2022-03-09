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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('datefounded')->nullable();
            $table->string('address')->nullable();
            $table->string('details')->nullable();
            $table->string('phone')->nullable();
            $table->string('sector')->nullable();
            $table->string('fullemployees')->nullable();
            $table->string('partemployees')->nullable();
            $table->string('workforce')->nullable();
            $table->string("govItem")->nullable();
            $table->string("piItem")->nullable();
            $table->string("encItem")->nullable();
            $table->string("epItem")->nullable();
            $table->string("disItem")->nullable();
            $table->string("termItem")->nullable();
            $table->string("wasItem")->nullable();
            $table->string("watItem")->nullable();
            $table->string("nghgItem")->nullable();
            $table->string("eneItem")->nullable();
            $table->string("hItem")->nullable();
            $table->string("wagItem")->nullable();
            $table->string("ghgItem")->nullable();
            $table->string("proItem")->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
