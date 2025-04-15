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
        Schema::table('users', function (Blueprint $table) {
            // Adding columns
            $table->string('role')->default(2)->comment('1=admin, 2=users');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('class_id');

            // Adding foreign key constraints
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Dropping foreign key constraints
            $table->dropForeign(['book_id']);
            $table->dropForeign(['class_id']);

            // Dropping the columns
            $table->dropColumn('book_id');
            $table->dropColumn('class_id');
        });
    }
};
