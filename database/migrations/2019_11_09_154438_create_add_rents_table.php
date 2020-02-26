<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_rents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('added_by');
            $table->integer('status')->default(1);
            $table->float('rent_home', 10, 2);
            $table->float('rent_electricity', 10, 2);
            $table->float('rent_gas', 10, 2);
            $table->float('rent_cooker', 10, 2);
            $table->float('rent_extra', 10, 2)->nullable();
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
        Schema::dropIfExists('add_rents');
    }
}
