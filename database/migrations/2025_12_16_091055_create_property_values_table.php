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
        Schema::create('property_values', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('value');

            $table->uuid('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['property_id', 'value']);
        });

        Schema::create('product_property_value', function (Blueprint $table) {
            $table->uuid('product_id');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnDelete();

            $table->uuid('property_value_id');
            $table->foreign('property_value_id')
                ->references('id')
                ->on('property_values')
                ->cascadeOnDelete();

            $table->unique(['product_id', 'property_value_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() :void
    {
        Schema::dropIfExists('property_values');
    }
};
