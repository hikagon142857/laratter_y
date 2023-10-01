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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            // 🔽 ここから追加
            $table->string('tweet');
            $table->text('description')->nullable();
            
            //トレーニング内容の記録
            $table->integer('BP')->nullable();
            $table->integer('DL')->nullable();
            $table->integer('SQ')->nullable();

            // 🔼 ここまで追加
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tweets');
    }
};
