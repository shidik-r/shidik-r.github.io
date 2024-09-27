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
        if (Schema::hasColumn('users', 'address')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('address');
            });
            Schema::table('users', function (Blueprint $table) {
                $table->text('address')->nullable()->after('photo_profile');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('users', 'address')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('address');
            });
            Schema::table('users', function (Blueprint $table) {
                $table->text('address')->after('photo_profile');
            });
        }
    }
};
