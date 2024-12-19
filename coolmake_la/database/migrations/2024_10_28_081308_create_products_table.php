<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name') -> nullable();
            $table->string('material') -> nullable();
            $table->string('price_nomal') -> nullable();
            $table->string('price_sale') -> nullable();
            $table->longText('description')->nullable();
            $table->longText('content') ->nullable();
            $table->string('image') ->nullable();
            $table->string('images') ->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        
    }
};
