<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('certificates', function (Blueprint $t) {
            $t->id();
            $t->string('title');
            $t->string('organization');
            $t->text('description')->nullable();
            $t->string('certificate_image')->nullable();
            $t->string('credential_file')->nullable();
            $t->string('credential_link')->nullable();
            $t->date('issue_date')->nullable();
            $t->boolean('featured')->default(false);
            $t->integer('sort_order')->default(0);
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('certificates'); }
};
