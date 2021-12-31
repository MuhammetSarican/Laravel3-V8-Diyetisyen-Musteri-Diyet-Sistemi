<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',150);
            $table->string('ip',150);
            $table->string('email',150)->nullable();
            $table->string('phone',150)->nullable();
            $table->string('subject',150)->nullable();
            $table->string('message',150)->nullable();
            $table->string('note',75)->nullable();
            $table->string('status',75)->nullable()->default('False');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
