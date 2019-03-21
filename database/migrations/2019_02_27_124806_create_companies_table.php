<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('short_name')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('zip')->nullable();
            $table->string('avatar')->nullable();

            $table->string('manager')->nullable();
            $table->string('contact')->nullable();

            $table->string('phone')->nullable();

            $table->string('mobile')->nullable();
            $table->string('email')->nullable();

            $table->string('QQ')->nullable();

            $table->string('bank')->nullable();
            $table->string('account')->nullable();

            $table->string('edit_id')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
