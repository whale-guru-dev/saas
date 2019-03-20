<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('newsletter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading');
            $table->string('icon');
            $table->integer('orderby')->default(0);
            $table->text('description');
            $table->string('language');
            $table->timestamps();
        });

        Schema::create('case_studies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->string('main_image');
            $table->integer('orderby')->default(0);
            $table->string('goto')->nullable();
            $table->string('language');
            $table->timestamps();
        });

        Schema::create('faq_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('language');
            $table->timestamps();
        });

        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('category_id');
            $table->string('language');
            $table->timestamps();
        });

        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('role');
            $table->string('image');
            $table->string('twitter_url');
            $table->string('facebook');
            $table->string('language');
            $table->integer('orderby')->default(0);
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->integer('orderby')->default(0);
            $table->string('author');
            $table->string('language');
            $table->timestamps();
        });

        Schema::create('career_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('orderby')->default(0);
            $table->string('goto')->nullable();
            $table->text('description');
            $table->string('language');
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
        Schema::drop('newsletter');
        Schema::drop('features');
        Schema::drop('case_studies');
        Schema::drop('faq_categories');
        Schema::drop('faqs');
        Schema::drop('employees');
        Schema::drop('testimonials');
        Schema::drop('career_jobs');
    }
}
