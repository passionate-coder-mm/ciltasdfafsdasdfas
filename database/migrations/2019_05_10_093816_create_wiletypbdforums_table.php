<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWiletypbdforumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wiletypbdforums', function (Blueprint $table) {
            $table->Increments('id');
            $table->text('name')->nullable();
            $table->text('designation')->nullable();
            $table->text('email')->nullable();
            $table->text('country')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('wiletypbdforums');
    }
}
