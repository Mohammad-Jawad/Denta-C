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
<<<<<<< HEAD:database/migrations/2018_09_29_065403_create_xrays_table.php
            $table->longText('description')->nullable();
            $table->boolean('status_pay')->nullable();
            $table->unsignedInteger('FK_id_treatment')->nullable();
            $table->unsignedInteger('FK_id_patient')->nullable();
            $table->unsignedInteger('FK_id_doctor')->nullable();
=======
            $table->integer('tooth_number');
            $table->longText('description');
            $table->boolean('status_xray');
            $table->boolean('status_pay')->nullable();
            $table->unsignedInteger('treatment_id')->nullable();

>>>>>>> 04a8d3c39c12e2c5bb6848b695fd79ba1b0b8f66:database/migrations/2018_09_26_070333_create_x_rays_table.php
            $table->timestamps();

            $table->foreign('treatment_id')
                ->references('id')->on('treatments')
                ->onDelete('cascade')
                ->onUpdate('cascade');

<<<<<<< HEAD:database/migrations/2018_09_29_065403_create_xrays_table.php
            $table->foreign('FK_id_patient')
                ->references('id')->on('patients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('FK_id_doctor')
                ->references('id')->on('doctors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
=======
>>>>>>> 04a8d3c39c12e2c5bb6848b695fd79ba1b0b8f66:database/migrations/2018_09_26_070333_create_x_rays_table.php
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
