<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id')->index();
            $table->text('text');
            $table->text('incorrect_statement')->nullable();
            $table->text('correct_statement')->nullable();
            $table->unsignedTinyInteger('status')->nullable()->comment(' 1:very-weak , 2:weak-need-correction , 3:corrected , 4:ok-confirm ');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('answers');
    }
};
