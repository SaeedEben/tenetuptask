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
        Schema::create('product_files', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('path');
            $table->string('type');
            $table->integer('size')->nullable();
            $table->string('extension')->nullable();
            $table->string('alt')->nullable();
            $table->integer('position')->nullable();

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
        Schema::dropIfExists('product_files');
    }
};
