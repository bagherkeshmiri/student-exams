<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('phoneable_id');
            $table->string('phoneable_type');
            $table->unsignedInteger('number');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('phones');
    }
};
