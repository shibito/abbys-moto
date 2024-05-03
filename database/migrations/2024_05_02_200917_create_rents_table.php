<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void
        {
            Schema::create('rents', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->foreignUuid('client_user_id');
                $table->foreignUuid('motorcycle_stock_id');
                $table->dateTime('from_date');
                $table->dateTime('to_date');
                $table->dateTime('return_date')->nullable();
                $table->string('comment_in')->nullable();
                $table->string('comment_out')->nullable();
                $table->boolean('returned')->default(false);
                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('rents');
        }
    };
