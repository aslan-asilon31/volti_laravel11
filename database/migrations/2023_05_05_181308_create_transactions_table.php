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
        Schema::create('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('user_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('price_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('shipping_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('snap_token', 36)->nullable();
            $table->string('payment_method')->nullable();
            $table->string('invoice_code')->nullable();
            $table->integer('prod_amount')->nullable();
            $table->integer('total_price')->nullable();
            $table->integer('gross_total_price')->nullable();
            $table->integer('workspace_id')->nullable();
            $table->json('desc')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //  $table->foreign('status_id')->references('id')->on('res_status')->onDelete('cascade');
            //  $table->foreign('category_id')->references('id')->on('res_categories')->onDelete('cascade');
            //  $table->foreign('price_id')->references('id')->on('res_prices')->onDelete('cascade');
            //  $table->foreign('brand_id')->references('id')->on('res_brands')->onDelete('cascade');
            //  $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
