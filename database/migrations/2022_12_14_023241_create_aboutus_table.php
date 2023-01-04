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
        Schema::create('aboutus', function (Blueprint $table) {
            $table->id();
            $table->string('Desc_1');
            $table->string('img_1');
            $table->string('Desc_2');
            $table->string('Desc_3');
            $table->string('Desc_4');
            $table->string('Desc_5');
            $table->string('Desc_6');
            $table->string('img_2');
            $table->string('img_3');
            $table->string('img_4');
            $table->string('Desc_7');
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
        Schema::dropIfExists('aboutus');
    }
};
