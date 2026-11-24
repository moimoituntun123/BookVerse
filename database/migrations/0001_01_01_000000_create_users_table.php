<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');

            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 20)->nullable();

            $table->string('password', 255);

            $table->date('date_of_birth')->nullable();
            $table->string('avatar', 255)->nullable();

            // 1: customer, 2: staff, 3: admin
            $table->unsignedTinyInteger('role')->default(1);

            // 1: active, 0: inactive
            $table->unsignedTinyInteger('account_status')->default(1);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
