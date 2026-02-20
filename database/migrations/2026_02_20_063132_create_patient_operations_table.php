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
        Schema::create('patient_operations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_case_id')->constrained()->cascadeOnDelete();
            $table->date('operation_date');
            $table->string('patient_relative_name', 255)->nullable()->collate('utf8mb4_unicode_ci');
            $table->string('patient_relative_relation', 255)->nullable()->collate('utf8mb4_unicode_ci');
            $table->enum('eye', ['Right', 'Left', 'Both'])->nullable();
            $table->foreignId('operation_type_id')->constrained()->cascadeOnDelete();
            $table->decimal('operation_fees', 10, 2)->default(0.00)->comment('operation fees based on operation type');
            $table->decimal('welfare_fund', 10, 2)->default(0.00)->comment('welfare fund based on operation type');
            $table->decimal('total_fees', 10, 2)->default(0.00)->comment('total fees');
            $table->string('operation_details', 255)->nullable()->collate('utf8mb4_unicode_ci');
            $table->foreignId('surgeon_id')->constrained()->cascadeOnDelete();
            $table->enum('status', ['Pending', 'Completed', 'Cancelled'])->default('Pending');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_operations');
    }
};
