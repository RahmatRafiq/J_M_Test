<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnsTable extends Migration
{
    public function up()
    {
        Schema::create('returns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rental_id');
            $table->date('return_date');
            $table->timestamps();

            $table->foreign('rental_id')->references('id')->on('rentals');
        });
    }

    public function down()
    {
        Schema::dropIfExists('returns');
    }
}
