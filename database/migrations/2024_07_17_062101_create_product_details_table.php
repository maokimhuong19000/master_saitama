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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('quantity')->nullable();
            $table->tinyInteger('allow_out_of_stock')->default(0);
            $table->tinyInteger('notify_low_stock')->default(1);
            $table->tinyInteger('display_at_storefront')->default(0);
            $table->tinyInteger('standard_shipping')->default(1);
            $table->tinyInteger('express_shipping')->default(1);
            $table->tinyInteger('priority_shipping')->default(1);
            $table->decimal('tax_excluded', 10, 2)->nullable();
            $table->decimal('tax_included', 10, 2)->nullable();
            $table->string('image_url')->nullable();
            $table->text('gallery_urls')->nullable();
            $table->timestamps(); // This will create `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
