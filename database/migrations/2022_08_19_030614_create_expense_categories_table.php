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
        Schema::create('expense_categories', function (Blueprint $table) {
            $table->id();
            $table->string('food');
            $table->string('social_life');
            $table->string('self_development');
            $table->string('transformation');
            $table->string('culture');
            $table->string('household');
            $table->string('apparel');
            $table->string('beauty');
            $table->string('health');
            $table->string('education');
            $table->string('gift');
            $table->string('other');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_categories');
    }
};
