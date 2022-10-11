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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id');
            $table->string('unique_id', 200)->unique()->nullable();
            $table->char('gender', 1)->default('m');
            $table->date('birthday')->nullable();
            $table->decimal('salary', 11, 2)->nullable();

            $table->index(['unique_id', 'birthday']);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
