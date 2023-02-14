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
        Schema::create('passworks', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            
            $table->bigInteger('group_id')->unsigned()->nullable();

            $table->string('name');
            $table->string('email');
            $table->string('pass');
            $table->text('note')->nullable();
            $table->timestamps();


            $table->foreign('group_id')->references('id')->on('groups')->onUpdate('cascade')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passworks');
    }
};
 