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
        Schema::create('paymentpage', function (Blueprint $table) {
            $table->id();
            $table->string('FullName');
            $table->string('Email');
            $table->string('Address');
            $table->string('City');
            $table->string('State');
            $table->string('Zip');
            $table->string('NameOnCard');
            $table->string('CreditCardNumber');
            $table->string('ExpMonth');
            $table->string('ExpYear');
            $table->string('CVV');
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
        Schema::dropIfExists('paymentpage');
    }
};
