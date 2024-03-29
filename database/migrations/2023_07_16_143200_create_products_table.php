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
            $table->foreignId('category_id')->constrained('categories')->OnDelete('cascade');
            $table->foreignId('sub_categories_id')->nullable()->constrained('sub_categories')->OnDelete('cascade');
            $table->foreignId('brands_id')->nullable()->constrained('brands')->OnDelete('cascade');
            $table->string('name');
            $table->string('image');
            $table->longText('description')->nullable();
            $table->double('discount')->nullable();
            $table->double('price',10,2)->nullable();
            $table->string('slug');
            $table->string('stock');
            $table->Boolean('status')->default(0);
            $table->Boolean('featured')->default(0);
            $table->string('sizes')->nullable();
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
