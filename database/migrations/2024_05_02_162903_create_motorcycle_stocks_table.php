<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void
        {
            Schema::create('motorcycle_stocks', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->foreignUuid('motorcycle_id');
                $table->string('plate');
                $table->text('details');
                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('motorcycle_stocks');
        }
    };
