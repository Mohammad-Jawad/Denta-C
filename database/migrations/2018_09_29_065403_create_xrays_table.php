<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXraysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xrays', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('description')->nullable();
            $table->boolean('status_pay')->nullable();
            $table->unsignedInteger('FK_id_treatment')->nullable();
            $table->unsignedInteger('FK_id_patient')->nullable();
            $table->timestamps();

            $table->foreign('FK_id_treatment')
                ->references('id')->on('treatments')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('FK_id_patient')
                ->references('id')->on('patients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xrays');
    }
}
