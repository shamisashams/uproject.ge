<?php

 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;

 class CreateBlogsTable extends Migration
 {

     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
         Schema::create('blogs', function (Blueprint $table) {
             $table->id();
             $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
             $table->foreignId('language_id')->constrained('languages')->onDelete('cascade');
             $table->string('title');
             $table->text('content')->nullable();
             $table->index(['user_id', 'language_id']);
             $table->boolean('status')->default(true);
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
         Schema::dropIfExists('blogs');
     }

 }
 