<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->text('statistics_link')->nullable()->change();
            $table->text('affiliate_link')->nullable()->change();
            $table->string('direct_link')->nullable()->change();

            $table->text('link')->nullable()->after('affiliate_link');
            $table->string('link_type')->nullable()->after('link')->default('affiliate_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->text('statistics_link')->change();
            $table->text('affiliate_link')->change();
            $table->string('direct_link')->change();

            $table->dropColumn('link');
            $table->dropColumn('link_type');
        });
    }
};
