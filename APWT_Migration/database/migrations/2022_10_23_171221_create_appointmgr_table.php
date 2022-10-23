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
        Schema::create('appointmgr', function (Blueprint $table) {
            // m_id, o_id, mname, memail, address, jobtitile, phone, salary
            $table->id('m_id');
            $table->string('o_id');
            $table->string('mname');
            $table->string('memail');
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
        Schema::dropIfExists('appointmgr');
    }
};
