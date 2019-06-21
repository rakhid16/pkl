<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizCsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_csos', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('question');
            $table->string('image')->default('no_pic.jpg');
            $table->text('multiple_choice_1');
            $table->text('multiple_choice_2');
            $table->text('multiple_choice_3');
            $table->text('multiple_choice_4');
            $table->text('multiple_choice_5');
            $table->string('answer_key',1);
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
        Schema::dropIfExists('quiz_csos');
    }
}
