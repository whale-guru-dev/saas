<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersManager extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable();
            $table->string('first_name')->nullable();
            $table->integer('application_id')->nullable();
            $table->string('password');
            $table->integer('uid')->nullable();
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('app_pass')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee');

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('app_pass');
        });
    }
}
