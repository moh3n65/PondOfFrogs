<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->timestamp('date_of_birth')->nullable(false);
            $table->timestamp('date_of_dead')->nullable();
            $table->unsignedInteger('dad_id')
                ->nullable();
            $table->unsignedInteger('mom_id')
                ->nullable();
            $table->unsignedInteger('partner_id')
                ->nullable();
            $table->boolean('gender');
            $table->timestamp('last_feed')->nullable();
            $table->tinyInteger('hunger_rate');

            $table->softDeletes();
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
        Schema::drop('frogs');
    }
}
