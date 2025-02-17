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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //user_id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            //address_id
            $table->foreignId('address_id')->constrained('addresses')->onDelete('cascade');
            //seller_id
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            //total_price
            $table->double('total_price', 10, 2);
            //shipping_price
            $table->double('shipping_price', 10, 2);
            //maintenance_cost
            $table->double('maintenance_cost', 10, 2);
            //grand_total
            $table->double('grand_total', 10, 2);
            //status string
            $table->string('status')->default('PENDING');
            //payment va name
            $table->string('payment_va_name')->nullable();
            //payment va number
            $table->string('payment_va_number')->nullable();
            //shipping_service
            $table->string('shipping_service')->nullable();
            //shipping_receipt
            $table->string('shipping_number')->nullable();
            //transaction_number
            $table->string('transaction_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
