<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('user', function (Blueprint $table) {
            $table->string('uuid', 36)->nullable()->unique()->after('id');
        });

        // populate existing rows with uuid
        $users = \DB::table('user')->get();
        foreach ($users as $u) {
            \DB::table('user')->where('id', $u->id)->update(['uuid' => (string) Str::uuid()]);
        }

        // make uuid not nullable
        Schema::table('user', function (Blueprint $table) {
            $table->string('uuid', 36)->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });
    }
};
