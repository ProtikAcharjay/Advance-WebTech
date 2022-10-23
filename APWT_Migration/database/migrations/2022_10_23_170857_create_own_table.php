<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('own', function (Blueprint $table) {
            // o_id, oname, oemail, address, phone,s_id
            $table->id('o_id');
            $table->string('oname');
            $table->string('oemail');
            $table->text('address');
            $table->string('phone');
            $table->string('s_id');
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
        Schema::dropIfExists('own');
    }
};
