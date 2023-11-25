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
        Schema::create("orders", function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->string("fullname");
            $table->string("email");
            $table->string("phone");
            $table->string("address");
            $table->string("note")->nullable();
            $table->timestamps();
            $table->tinyInteger("status");
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
