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
        Schema::create('shippings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('box');

            $table->boolean('has_cites_Permit');
            $table->boolean('has_fad_medical_device_classification');
            $table->boolean('has_dangerous_good_classification');


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
        Schema::dropIfExists('shippings');
    }
};
