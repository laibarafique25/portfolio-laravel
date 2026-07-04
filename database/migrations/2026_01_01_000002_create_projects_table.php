<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('projects', function (Blueprint $t) {
            $t->id();
            $t->string('name');
            $t->string('tagline');
            $t->text('description')->nullable();
            $t->string('image')->nullable();
            $t->json('stack')->nullable();
            $t->string('github_url')->nullable();
            $t->string('live_url')->nullable();
            $t->boolean('featured')->default(false);
            $t->integer('sort_order')->default(0);
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('projects'); }
};
