<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->string('image');
            $table->text('afftitle');
            $table->text('affdescription');
            $table->text('memtitle');
            $table->text('memdescription');
            $table->text('cmtitle');
            $table->text('cmdescription');
            $table->text('cftitle');
            $table->text('cfdescription');
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
        Schema::dropIfExists('grades');
    }
}
