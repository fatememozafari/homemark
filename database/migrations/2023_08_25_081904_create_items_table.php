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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('case_number');
            $table->string('title');
            $table->string('private_address');
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('type',['house','villa','apartment','land','garden','shop','office','prebuy'])->nullable();
            $table->enum('contract',['sale','rent'])->nullable();
            $table->enum('status',['active','in-active'])->default('active')->nullable();

            $table->string('seller_phone')->nullable();
            $table->integer('room')->nullable();
            $table->integer('parking')->nullable();
            $table->integer('bathroom')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('deposit')->nullable();
            $table->bigInteger('rent')->nullable();
            $table->string('avatar')->nullable();
            $table->string('map')->nullable();
            $table->string('video')->nullable();
            $table->string('built_at')->nullable();
            $table->string('floor')->nullable();
            $table->boolean('warehouse')->nullable();
            $table->boolean('elevator')->nullable();
            $table->boolean('pool')->nullable();
            $table->boolean('underground')->nullable();
            $table->boolean('laundry')->nullable();
            $table->integer('area')->nullable();
            $table->string('yard_area')->nullable();
            $table->string('house_area')->nullable();
            $table->decimal('lat')->nullable();
            $table->decimal('long')->nullable();
            $table->boolean('is_vip')->default(false)->nullable();
            $table->text('description')->nullable();
            $table->text('details')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
