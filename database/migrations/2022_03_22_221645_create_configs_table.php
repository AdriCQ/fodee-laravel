<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->text('about_us');
            $table->string('about_us_picture');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->boolean('open')->default(true);
            // Social
            $table->string('social_fb')->nullable();
            $table->string('social_in')->nullable();
            $table->string('social_yt')->nullable();
            $table->string('social_tw')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configs');
    }
}
