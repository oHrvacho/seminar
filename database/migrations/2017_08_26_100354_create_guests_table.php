<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('ime_prezime_gost');
            $table->string('ime_prezime_pratnja');
            $table->integer('broj_djece');
            $table->timestamps();

            #Index
            $table->index('id');

            $table->primary('id');

            DB::statement('ALTER TABLE guests MODIFY id INTEGER NOT NULL AUTO_INCREMENT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
