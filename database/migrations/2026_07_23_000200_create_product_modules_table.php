<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_modules', function (Blueprint $table): void {
            $table->id();
            $table->string('code', 20)->unique();
            $table->string('slug')->unique();
            $table->string('name');
            $table->enum('pillar', ['Core HR', 'Talent Management', 'HR Analytics & Platform'])->index();
            $table->text('summary');
            $table->longText('description');
            $table->json('capabilities');
            $table->json('outcomes');
            $table->string('icon', 4)->default('◆');
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_modules');
    }
};
