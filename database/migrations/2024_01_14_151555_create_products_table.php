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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',225);
            $table->text('description')->nullable();
            $table->mediumText('small_description')->nullable();
            $table->integer('orginal_price')->nullable();
            $table->integer('price');
            $table->integer('stock');
            $table->timestamps();
            $table->tinyInteger('is_active')->default(1)->comment('0 = hidden, 1 = visible');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
