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
            $table->id();

            $table->string('name',50);
            $table->string('family',100);
            $table->string('username',30)->unique();
            $table->bigInteger('mobile')->unsigned()->unique();
            $table->string('password');

            $table->tinyInteger('level')->comment(' 0:elementary , 1:guidance , 2:high-school , 3:pre-university');

            $table->rememberToken();

            $table->softDeletes();
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
