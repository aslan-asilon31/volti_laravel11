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
        Schema::create('res_prices', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('product_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->string('name')->nullable();
            $table->integer('price_average')->nullable();
            $table->integer('price_purchase')->nullable();
            $table->integer('price_selling')->nullable();
            $table->integer('price_selling_after')->nullable();
            $table->integer('price_res_discount')->nullable();
            $table->string('currency')->nullable();
            $table->integer('discount')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_masters');
    }
};
