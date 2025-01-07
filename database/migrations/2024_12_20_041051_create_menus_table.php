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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('route_name')->nullable(); 
            $table->string('icon')->nullable(); 
            $table->unsignedBigInteger('parent_id')->nullable(); // Parent menu
            $table->string('permission_name')->nullable(); // Nullable foreign key
            $table->integer('order')->default(0); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
