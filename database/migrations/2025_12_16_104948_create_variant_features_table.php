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
        Schema::create('variant_features', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('variant_id');
            $table->foreign('variant_id')
                ->references('id')
                ->on('variants')
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('value');

            $table->timestamps();

            $table->index(['variant_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() :void
    {
        Schema::dropIfExists('variant_features');
    }
};
