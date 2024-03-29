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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('content');
            $table->string('file')->nullable();
            
            $table->enum('status', [0,1])->default(0); // 0 = borrador, 1 = published
            $table->enum('type', [0,1])->default(0); // 0 = NOticia, 1 = document
            $table->foreignId('user_id')->constrained();

            $table->foreignId('subcategory_id')->constrained();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
