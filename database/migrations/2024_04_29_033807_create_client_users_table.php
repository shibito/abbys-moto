<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void
        {
            Schema::create('client_users', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('firstname');
                $table->string('lastname');
                $table->foreignUuid('user_id');
                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('client_users');
        }
    };
