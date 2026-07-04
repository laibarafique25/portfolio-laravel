<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('education', function (Blueprint $table) {
            $table->string('institution_website')->nullable()->after('institution');
            $table->date('start_date')->nullable()->after('institution_website');
            $table->date('end_date')->nullable()->after('start_date');
            $table->boolean('in_progress')->default(false)->after('end_date');
        });
    }

    public function down(): void {
        Schema::table('education', function (Blueprint $table) {
            $table->dropColumn(['institution_website', 'start_date', 'end_date', 'in_progress']);
        });
    }
};