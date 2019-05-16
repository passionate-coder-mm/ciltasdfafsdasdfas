<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovtchargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('govtcharges', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('regfee');
            $table->string('ann11');
            $table->string('ann12');
            $table->string('ann21');
            $table->string('ann22');
            $table->string('ann31');
            $table->string('ann32');
            
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
        Schema::dropIfExists('govtcharges');
    }
}
