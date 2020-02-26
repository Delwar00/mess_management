<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddBazarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_bazars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->longText('product_name');
            $table->date('bazar_date');
            $table->float('add_bazar_cost', 10, 2);
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
        Schema::dropIfExists('add_bazars');
    }
}
