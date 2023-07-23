<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->unsignedInteger('response_deadline')->comment('minute');
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedTinyInteger('status')->default(1)->comment(' 1 => raw , 2 => answered , 3 => reviewed , 4 => have-protest , 5 => protest-approved , 6 => confirmed');
            $table->text('text');
            $table->timestamp('response_time')->nullable();
            $table->timestamp('review_time')->nullable();
            $table->timestamp('confirmation_time')->nullable();
            $table->timestamp('protest_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('questions');
    }
};
