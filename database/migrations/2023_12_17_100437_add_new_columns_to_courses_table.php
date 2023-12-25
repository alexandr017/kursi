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
            $table->integer('direction')->nullable();
            $table->tinyInteger('complexity')->nullable();
            $table->tinyInteger('learning_type')->nullable();
            $table->tinyInteger('format_learning_type')->nullable();
            $table->tinyInteger('chart')->nullable();
            $table->tinyInteger('employment')->nullable();
            $table->tinyInteger('document_type')->nullable();
            $table->tinyInteger('document')->nullable();
            $table->tinyInteger('access')->nullable();
            $table->text('tools')->nullable();
            $table->tinyInteger('portfolio')->nullable();
            $table->text('portfolio_project')->nullable();
            $table->longText('description_course')->nullable();
            $table->tinyInteger('price_request')->nullable();
            $table->float('duration_month')->nullable();
            $table->boolean('trial_period')->nullable();
            $table->boolean('free_status')->nullable();
            $table->text('title')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('direction');
            $table->dropColumn('complexity');
            $table->dropColumn('learning_type');
            $table->dropColumn('format_learning_type');
            $table->dropColumn('chart');
            $table->dropColumn('employment');
            $table->dropColumn('document_type');
            $table->dropColumn('document');
            $table->dropColumn('access');
            $table->dropColumn('tools');
            $table->dropColumn('portfolio');
            $table->dropColumn('portfolio_project');
            $table->dropColumn('description_course');
            $table->dropColumn('price_request');
            $table->dropColumn('duration_month');
            $table->string('title')->change();
        });
    }
};
