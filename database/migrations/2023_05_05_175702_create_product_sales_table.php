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
        Schema::create('product_sales', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('product_variant_id')->nullable();
            $table->string('product_review_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('price_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('image_id')->nullable();
            $table->string('name')->nullable();
            $table->integer('workspace_id')->nullable();
            $table->json('desc')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            //  $table->foreign('product_variant_id')->references('id')->on('product_variants')->onDelete('cascade');
            //  $table->foreign('product_review_id')->references('id')->on('product_reviews')->onDelete('cascade');
            //  $table->foreign('status_id')->references('id')->on('res_status')->onDelete('cascade');
            //  $table->foreign('price_id')->references('id')->on('res_prices')->onDelete('cascade');
            //  $table->foreign('image_id')->references('id')->on('res_images')->onDelete('cascade');

        });
    }

                // $table->string('name');
            // $table->double('price');
            // $table->text('description');
            // $table->string('image');
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
