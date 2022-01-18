<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('order_id')->nullable();
            $table->integer('dietitian_id');
            $table->date('date');
            $table->time('time');
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->float('mass_index')->nullable();
            $table->float('pulse')->nullable();
            $table->string('ip',150);
            $table->string('note',150)->nullable();
            $table->string('status',150)->default('False');
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
        Schema::dropIfExists('appointments');
    }
}
