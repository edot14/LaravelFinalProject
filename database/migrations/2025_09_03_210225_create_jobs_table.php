<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company')->nullable();
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('contract_type')->nullable();
            $table->string('salary_min')->nullable();
            $table->string('salary_max')->nullable();
            $table->string('redirect_url')->nullable();  // This will come from Adzuna
            $table->timestamps();
        });
    }
};
