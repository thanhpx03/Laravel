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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
//         Schema::create('roles', function (Blueprint $table) {
//             $table->increments('id');
//             $table->string('name');
//         });
//         Schema::create('permissions', function (Blueprint $table) {
//             $table->increments('id');
//             $table->string('name');
//         });
        
// Schema::create('role_user', function (Blueprint $table) {
//     $table->unsignedInteger('user_id');
//     $table->unsignedInteger('role_id');

//     $table->foreign('user_id')->references('id')->on('users')
//         ->onDelete('cascade');
//     $table->foreign('role_id')->references('id')->on('roles')
//         ->onDelete('cascade');
// });
// Schema::create('permission_role', function (Blueprint $table) {
//     $table->unsignedInteger('permission_id');
//     $table->unsignedInteger('role_id');

//     $table->foreign('permission_id')->references('id')->on('permissions')
//         ->onDelete('cascade');
//     $table->foreign('role_id')->references('id')->on('roles')
//         ->onDelete('cascade');
// });

// Schema::create('posts', function (Blueprint $table) {
//     $table->bigIncrements('id');
//     $table->unsignedInteger('user_id');
//     $table->string('title');
//     $table->text('content');
//     $table->string('status');
//     $table->timestamps();

//     $table->foreign('user_id')->references('id')->on('users')
//         ->onDelete('cascade');
// });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
