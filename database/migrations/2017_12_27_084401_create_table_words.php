<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('word');
            $table->string('pronounce')->nullable();
            $table->string('translation');
            $table->text('explain')->nullable();
            $table->text('example')->nullable();
            $table->integer('delete_flag')->default(0);
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
        Schema::dropIfExists('words');
    }
}
