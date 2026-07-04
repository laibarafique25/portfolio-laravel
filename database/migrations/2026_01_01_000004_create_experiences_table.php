<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('experiences', function (Blueprint $t) {
            $t->id();
            $t->string('role');
            $t->string('company');
            $t->string('location')->nullable();
            $t->string('period');
            $t->text('description')->nullable();
            $t->integer('sort_order')->default(0);
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('experiences'); }
};
