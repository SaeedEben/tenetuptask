<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() :void
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('sku')->unique();
            $table->decimal('price', 10);
            $table->integer('stock')->default(0);
            $table->boolean('is_default')->default(false);

            $table->uuid('product_id');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() :void
    {
        Schema::dropIfExists('variants');
    }
};
