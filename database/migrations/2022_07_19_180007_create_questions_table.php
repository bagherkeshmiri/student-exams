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


            $table->tinyInteger('status')->comment(' 0:new , 1:reviewed , 2:have-protest , 3:protest-approved , 4:confirmed')->default(0);

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
