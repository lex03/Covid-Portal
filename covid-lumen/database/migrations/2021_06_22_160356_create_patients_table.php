<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
                $table->increments('id');
                $table->text("fullname");
                // $table->integer("age");
                // $table->date("dob");
                // $table->string("acn");
                // $table->text("address");
                // $table->string("vaccdone");
                // $table->date("vaccdone1");
                // $table->date("vaccdone2");
                // $table->string("result");
                // $table->string("iso");
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
        Schema::dropIfExists('patients');
    }
}
