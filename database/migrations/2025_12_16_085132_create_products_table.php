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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('gender')->default(\App\Enum\Product\ProductGenderEnum::OTHER);
            $table->string('code');

            $table->uuid('shop_id')->nullable();
            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')->onDelete('SET NULL');

            $table->uuid('brand_id')->nullable();
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')->onDelete('SET NULL');

            $table->uuid('collection_id')->nullable();
            $table->foreign('collection_id')
                ->references('id')
                ->on('collections')->onDelete('SET NULL');

            $table->uuid('category_id')->nullable();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')->onDelete('SET NULL');

            $table->uuid('sub_category_id')->nullable();
            $table->foreign('sub_category_id')
                ->references('id')
                ->on('categories')->onDelete('SET NULL');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() :void
    {
        Schema::dropIfExists('products');
    }
};
