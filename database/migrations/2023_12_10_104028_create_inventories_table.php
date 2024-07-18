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
        Schema::create('inventories', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('user_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('product_sales_id')->nullable();
            $table->string('amount')->nullable();
            $table->integer('status_return')->nullable();
            $table->integer('status_display')->nullable();
            $table->integer('status_type')->nullable();
            $table->integer('workspace_id')->nullable();
            $table->json('desc')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            //  $table->foreign('status_id')->references('id')->on('res_status')->onDelete('cascade');
            //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_masters');
    }
};
