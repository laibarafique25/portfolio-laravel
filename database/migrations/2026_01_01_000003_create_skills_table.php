<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('skills', function (Blueprint $t) {
            $t->id();
            $t->string('name');
            $t->enum('category', ['frontend','backend','tools'])->default('frontend');
            $t->unsignedTinyInteger('level')->default(80);
            $t->integer('sort_order')->default(0);
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('skills'); }
};
