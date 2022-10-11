<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname');
            $table->string('email')->unique()->nullable();
            $table->char('phone', 15)->unique()->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('password');

            $table->nullableMorphs('user');
            
            
            $table->string('role')->default('employee');
            $table->string('status');
            $table->rememberToken();
            
            $table->timestamp('banned_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index([
                'name',
                'email',
                'nickname',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
