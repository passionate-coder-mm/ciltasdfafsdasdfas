<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpmembers', function (Blueprint $table) {
            $table->Increments('id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('bottomdescription')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpmembers');
    }
}
