<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable; 
            $table->string('code')->nullable;
            $table->string('buy')->nullable;
            $table->string('sell')->nullable;
            $table->string('logo')->nullable;
            $table->string('buy_min')->nullable;
            $table->string('buy_max')->nullable;
            $table->string('sell_min')->nullable;
            $table->string('sell_max')->nullable;
            $table->string('status')->nullable;
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
        Schema::dropIfExists('assets');
    }
}
