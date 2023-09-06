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
        Schema::create('item_comments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('unknown')->nullable();
            $table->text('body');
            $table->foreignId('parent_id')->default(null)->constrained('item_comments')->nullable();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->integer('commentable_id')->nullable();
            $table->string('commentable_type')->nullable();
            $table->tinyInteger('seen')->default(0)->comment('0 => unseen, 1 => seen');
            $table->tinyInteger('approved')->default(0)->comment('0 => not approved, 1 => approved');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_comments');
    }
};
