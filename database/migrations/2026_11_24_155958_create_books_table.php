<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('book_id');

            $table->string('book_code', 30)->unique();
            $table->string('book_name', 255);
            $table->longText('description')->nullable();

            $table->string('author', 255);
            $table->string('publisher', 150);
            $table->string('language', 50);

            // 1: Đang kinh doanh, 0: Ngừng kinh doanh
            $table->unsignedTinyInteger('status')->default(1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
