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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->string('content');
            $table->bigInteger('file_owner_id')->unsigned();
            $table->foreign('file_owner_id')->references('id')->on
            ('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('group_id')->unsigned( );
            $table->foreign('group_id')->references('id')->on
            ('groups')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('files');
    }
};
