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
        Schema::create('appointemp', function (Blueprint $table) {
            // m_id, e_id, ename, eemail, address, jobtitile, phone, salary
            $table->id('e_id');
            $table->string('m_id');
            $table->string('ename');
            $table->string('eemail');
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
        Schema::dropIfExists('appointemp');
    }
};
