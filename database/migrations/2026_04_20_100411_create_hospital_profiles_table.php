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
        Schema::create('hospital_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('karumkit_name')->nullable();
            $table->string('karumkit_rank')->nullable();
            $table->string('karumkit_photo')->nullable();
            $table->text('welcome_message')->nullable();
            $table->text('visi')->nullable();
            $table->json('misi')->nullable();
            $table->json('motto')->nullable();
            $table->string('hospital_type')->default('TIPE C');
            $table->string('accreditation')->default('UTAMA');
            $table->string('certification')->default('BSrE');
            $table->string('organization_chart')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospital_profiles');
    }
};
