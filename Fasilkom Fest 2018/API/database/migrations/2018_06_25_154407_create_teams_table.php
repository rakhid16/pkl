<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',150);
            $table->string('password',100)->default('');
            $table->string('school_name');
            $table->string('name');
            $table->string('token')->default('');
            $table->integer('valid_bayar')->default(1);//1 = belum bayar, 2 = lapor sudah bayar, 3 = sudah bayar
            $table->integer('valid_register_data')->default(1);//1 = data persyaratan belum valid, 2 = data persyaratan siap diperiksa, 3 = data persyaratan valid
            $table->string('note_register_data')->default('');
            $table->integer('valid_on_off')->default(1);//1= pending/menunggu konfirmasi admin, 2 = offline, 3 = online
            $table->integer('qualified_final')->default(2);//1 = diskualifikasi, 2 = babak penyisihan, 3 = babak penyisihan 2, 4 = lolos final
            $table->integer('flag')->default(1);
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
        Schema::dropIfExists('teams');
    }
}
