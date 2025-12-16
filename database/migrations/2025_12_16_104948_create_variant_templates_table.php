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
        Schema::create('variant_templates', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->string('display_name');

            $table->uuid('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->cascadeOnDelete();

            $table->uuid('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['category_id', 'property_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() :void
    {
        Schema::dropIfExists('variant_templates');
    }
};
