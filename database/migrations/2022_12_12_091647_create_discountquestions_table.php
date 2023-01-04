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
        Schema::create('discountquestions', function (Blueprint $table) {
            $table->string("Questionid");
            $table->string("Question");
            $table->string("OptionOne");
            $table->string("OptionTwo");
            $table->string("OptionThree");
            $table->string("OptionFour");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discountquestions');
    }
};
