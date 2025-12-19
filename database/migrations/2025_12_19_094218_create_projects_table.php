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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('client')->nullable();
            $table->enum('type', ['Roadmap', 'Off-Roadmap', 'Internal']);
            $table->string('status')->default('Planning');
            $table->enum('priority', ['High', 'Medium', 'Low'])->default('Medium');
            $table->text('resources')->nullable();
            $table->boolean('is_billable')->default(false);
            $table->date('start_date')->nullable();
            $table->date('planned_end_date')->nullable();
            $table->date('forecast_end_date')->nullable();
            $table->integer('progress_percentage')->default(0);
            $table->text('pm_comment')->nullable();
            $table->enum('last_week_rag', ['Green', 'Amber', 'Red'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
