<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id');
            $table->string('full_name');
            $table->string('handphone',15);
            $table->string('line',100);
            $table->string('image_student_card')->default('no_pic.jpg');
            $table->string('gender',1)->default('L');//L/P
            $table->integer('ketua_tim')->default(0);//0 = member, 1 = ketua tim
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
        Schema::dropIfExists('members');
    }
}
