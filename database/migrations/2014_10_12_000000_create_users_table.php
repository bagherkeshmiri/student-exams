<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('family', 100);
            $table->string('username', 30)->unique();
            $table->bigInteger('mobile')->nullable()->unsigned()->unique();
            $table->string('password');
            $table->unsignedTinyInteger('level')->nullable()->comment(' 1 => elementary , 2 => guidance , 3 => high-school , 4 => pre-university');
            $table->unsignedTinyInteger('type')->comment(' 1 => admin , 2 => user ');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
