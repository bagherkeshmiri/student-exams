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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            $table->string('link');

            $table->integer('response_deadline')->comment('minute');

            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade');


            $table->tinyInteger('status')->comment(' 0:raw , 1:answered , 2:reviewed , 3:have-protest , 4:protest-approved , 5:confirmed')->default(0);

            $table->text('text');

            $table->softDeletes();
            $table->timestamp('response_time')->nullable();
            $table->timestamp('review_time')->nullable();
            $table->timestamp('confirmation_time')->nullable();
            $table->timestamp('protest_time')->nullable();
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
        Schema::dropIfExists('questions');
    }
};
