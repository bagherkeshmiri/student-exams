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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade');

            $table->text('text');

            $table->text('incorrect_statement')->nullable();
            $table->text('correct_statement')->nullable();

            $table->tinyInteger('status')->comment(' 0:very-weak , 1:weak-need-correction , 2:corrected , 3:ok-confirm ');

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
        Schema::dropIfExists('answers');
    }
};
