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
        Schema::create('challengers_has_challenges', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("challenge_id")->nullable();

            $table->foreign("user_id")
                    ->references("id")->on("users")
                    ->onDelete("set null");
            $table->foreign("challenge_id")
                    ->references("id")->on("challenges")
                    ->onDelete("set null");

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
        Schema::dropIfExists('challengers_has_challenges');
    }
};
