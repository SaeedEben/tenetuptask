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
        Schema::create('notes', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('locale', 10);
            $table->text('product_detail')->nullable();
            $table->text('outfit_guideline')->nullable();
            $table->text('fit_details')->nullable();
            $table->text('size_details')->nullable();

            $table->uuid('product_id');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['locale', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() :void
    {
        Schema::dropIfExists('notes');
    }
};
