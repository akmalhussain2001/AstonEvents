<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('requests', function (Blueprint $table) {
          $table->id();
          $table->bigInteger('userid')->unsigned();
          $table->bigInteger('itemid')->unsigned();
          $table->string('reason', 256);
          $table->timestamps();
          $table->foreign('userid')->references('id')->on('users');
          $table->foreign('itemid')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
