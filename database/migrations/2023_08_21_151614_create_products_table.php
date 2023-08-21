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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->text('image1');
            $table->text('image2');
            $table->integer('stock')->default(1);
            $table->enum('size',['XS','S','M','L','XL','XXL'])->default('M');
            $table->enum('condition',['SALE','-16%','NEW','HOT','POPULAR'])->default('SALE');
            $table->enum('color',['RED','BLACK','GREEN','WHITE','YELLOW'])->default('RED');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->float('price');
            $table->float('priceReduction')->nullabale();
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
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
