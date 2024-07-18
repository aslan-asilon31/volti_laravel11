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
        Schema::create('master_deleted_records', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('table_name')->nullable();
            $table->integer('record_id')->nullable();
            $table->integer('parent_id')->nullable();
            $table->json('deleted_data')->nullable();
            $table->text('reason')->nullable(); //desc, created_by, last_updated_by, deleted_by
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_deleted_records');
    }
};
