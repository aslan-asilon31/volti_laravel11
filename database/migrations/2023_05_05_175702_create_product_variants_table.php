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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('product_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->string('name')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('is_sold')->nullable();
            $table->string('size')->nullable();
            $table->integer('rating')->nullable();
            $table->integer('wishlist')->nullable();
            $table->integer('workspace_id')->nullable();
            $table->json('desc')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            //  $table->foreign('product_id')->references('id')->on('product_sales')->onDelete('cascade');
            //  $table->foreign('status_id')->references('id')->on('res_status')->onDelete('cascade');

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
