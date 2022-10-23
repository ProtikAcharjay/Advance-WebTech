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
        Schema::create('appointworkr', function (Blueprint $table) {
            // m_id, w_id, wname, wemail, address, jobtitile, phone, salary
            $table->id('w_id');
            $table->string('m_id');
            $table->string('wname');
            $table->string('wemail');
            $table->text('address');
            $table->string('jobtitile');
            $table->string('phone');
            $table->string('salary');
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
        Schema::dropIfExists('appointworkr');
    }
};
