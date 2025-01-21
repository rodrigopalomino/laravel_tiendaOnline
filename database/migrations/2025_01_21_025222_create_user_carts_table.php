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
        Schema::create('user_carts', function (Blueprint $table) {
            $table->id();

            $table->string("cardNumber")->nullable(false); //numero de la tarjeta
            $table->string("cardHolederName")->nullable(false); //Titula de la tarjeta
            $table->date("expiration")->nullable(false); //Titula de la tarjeta


            $table->unsignedBigInteger("user_id");
            $table
                ->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");

            $table->unsignedBigInteger("method_id");
            $table
                ->foreign("method_id")
                ->references("id")
                ->on("payment_methods");

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
        Schema::dropIfExists('user_carts');
    }
};
