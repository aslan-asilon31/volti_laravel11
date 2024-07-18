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
        Schema::create('res_regions', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('status_id')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable(); // prov/kab/kel/kec
            $table->integer('workspace_id')->nullable();
            $table->json('desc')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            // //  $table->foreign('status_id')->references('id')->on('res_status')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region_masters');
    }
};
