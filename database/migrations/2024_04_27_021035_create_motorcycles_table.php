<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('type')->nullable();
            $table->string('displacement')->nullable();
            $table->string('engine')->nullable();
            $table->string('power')->nullable();
            $table->string('torque')->nullable();
            $table->string('compression')->nullable();
            $table->string('bore_stroke')->nullable();
            $table->string('valves_per_cylinder')->nullable();
            $table->string('fuel_system')->nullable();
            $table->string('fuel_control')->nullable();
            $table->string('ignition')->nullable();
            $table->string('lubrication')->nullable();
            $table->string('cooling')->nullable();
            $table->string('gearbox')->nullable();
            $table->string('transmission')->nullable();
            $table->string('clutch')->nullable();
            $table->string('fuel_consumption')->nullable();
            $table->string('emission')->nullable();
            $table->string('frame')->nullable();
            $table->string('front_suspension')->nullable();
            $table->string('front_wheel_travel')->nullable();
            $table->string('rear_suspension')->nullable();
            $table->string('rear_wheel_travel')->nullable();
            $table->string('front_tire')->nullable();
            $table->string('rear_tire')->nullable();
            $table->string('front_brakes')->nullable();
            $table->string('rear_brakes')->nullable();
            $table->string('total_weight')->nullable();
            $table->string('seat_height')->nullable();
            $table->string('total_height')->nullable();
            $table->string('total_length')->nullable();
            $table->string('total_width')->nullable();
            $table->string('ground_clearance')->nullable();
            $table->string('wheelbase')->nullable();
            $table->string('fuel_capacity')->nullable();
            $table->string('starter')->nullable();
            $table->string('dry_weight')->nullable();
            $table->string('top_speed')->nullable();
            $table->timestamps();
            $table->fullText([
                'make',
                'model',
                'year',
                'type',
                'displacement',
                'engine',
                'power',
                'torque',
                'ignition',
                'gearbox',
                'transmission',
                'clutch',
                'wheelbase',
                'emission',
                'fuel_system',
                'cooling',
            ], 'motorcycle_details_fulltext');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('motorcycles');
    }

};
