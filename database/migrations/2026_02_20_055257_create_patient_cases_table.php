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
        Schema::create('patient_cases', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name', 255)->nullable()->collation('utf8mb4_general_ci');
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->integer('age')->nullable();
            $table->string('mobile_no', 15)->nullable();
            $table->string('address', 255)->nullable()->collation('utf8mb4_general_ci');
            $table->string('taluka', 255)->nullable()->collation('utf8mb4_general_ci');
            $table->string('district', 255)->nullable()->collation('utf8mb4_general_ci');
            $table->decimal('case_fees', 10, 2)->default(0);
            $table->text('remark')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_cases');
    }
};
