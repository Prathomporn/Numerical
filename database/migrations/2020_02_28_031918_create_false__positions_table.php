<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFalsePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('false__positions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->float('XL');
          $table->float('XR');
          $table->float('XM');
          $table->float('XMOLD');
          $table->float('Error');
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
        Schema::dropIfExists('false__positions');
    }
}
