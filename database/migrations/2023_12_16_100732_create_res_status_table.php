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
        Schema::create('res_status', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('type_module')->nullable();
            $table->integer('workspace_id')->nullable();
            $table->json('desc')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_masters');
    }
};
