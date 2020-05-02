<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBroadcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broadcasts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sport_id')->constrained();
            $table->foreignId('bet_type_id')->constrained();
            $table->biginteger('team1');
            $table->biginteger('team2');
            $table->string('spread');
            $table->biginteger('star_count');
            $table->string('description');
            $table->string('result')->nullable();
            $table->float('percentage',2,2);
            $table->datetime('date_time');
            $table->boolean('is_broadcast')->default(false);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('broadcasts');
    }
}
