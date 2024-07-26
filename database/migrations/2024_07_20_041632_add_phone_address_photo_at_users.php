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
            //phone
            $table->string('phone')->nullable()->after('password');
            //address
            $table->string('address')->nullable()->after('phone');
            //country
            $table->string('country')->nullable()->after('address');
            //state
            $table->string('state')->nullable()->after('country');
            //city
            $table->string('city')->nullable()->after('state');
            //post_code
            $table->string('post_code')->nullable()->after('city');
            //roles
            $table->string('roles')->default('user')->after('post_code');
            //photo
            $table->string('photo')->nullable()->after('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('country');
            $table->dropColumn('state');
            $table->dropColumn('city');
            $table->dropColumn('post_code');
            $table->dropColumn('roles');
            $table->dropColumn('photo');
        });
    }
};
