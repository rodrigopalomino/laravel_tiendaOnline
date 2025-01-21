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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->integer("status")->default(0); // 0: sin completar; 1: completado
            $table->float("total"); //precio pagado

            $table->unsignedBigInteger("user_id");
            $table
                ->foreign("user_id")
                ->references("id")
                ->on("users");

            $table->unsignedBigInteger("method_id"); //metodo de pago
            $table
                ->foreign('method_id')
                ->references('id')
                ->on('payment_methods');
                

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
        Schema::dropIfExists('orders');
    }
};
