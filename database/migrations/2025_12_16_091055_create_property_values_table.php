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

            $table->uuid('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->cascadeOnDelete();

            $table->string('value');
            $table->timestamps();

            $table->unique(['property_id', 'value']);
        });

        Schema::create('variant_property_value', function (Blueprint $table) {
            $table->uuid('variant_id');
            $table->foreign('variant_id')
                ->references('id')
                ->on('variants')
                ->cascadeOnDelete();

            $table->uuid('property_value_id');
            $table->foreign('property_value_id')
                ->references('id')
                ->on('property_values')
                ->cascadeOnDelete();

            $table->unique(['variant_id', 'property_value_id']);

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
