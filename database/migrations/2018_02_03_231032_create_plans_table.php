<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('orderby')->default(0);
            $table->boolean('featured')->default(false);
            $table->text('description')->nullable(true);
            $table->string('gateway_id');
            $table->decimal('price', 6, 2);
            $table->boolean('active')->default(false);
            $table->integer('teams_limit')->nullable();
            $table->integer('storage_limit')->nullable();
            $table->string('api_plan')->nullable();
            $table->boolean('trial')->default(0);
            $table->integer('trial_days')->nullable();
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
        Schema::dropIfExists('plans');
    }
}
