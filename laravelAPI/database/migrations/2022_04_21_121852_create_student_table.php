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
        Schema::create('student', function (Blueprint $table) {
           $table->increments('studid'); 
        $table->string("name",100); 
        $table->string("email",100); 
        $table->string("gender",17); 
        $table->string("status",17); 
        $table->string("address1",100);
        $table->string("address2",100);
        $table->string("city",100);
        $table->string("country",100);
        $table->string("post_title",100);
        $table->string("post_body",100);
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
        Schema::dropIfExists('student');
    }
};
