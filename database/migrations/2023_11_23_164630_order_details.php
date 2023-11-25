<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create("order_details", function (Blueprint $table) {
            $table->id();
            $table->bigInteger("order_id");
            $table->bigInteger("product_id");
            $table->integer("price");
            $table->integer("quantity");
            $table->integer("total_money");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
