<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("from"); // 메시지 보낸 사람
            $table->unsignedBigInteger("to"); // 받는 사람
            $table->string("text"); // 메세지 내용
            $table->timestamps();

            $table->foreign("from")->references("id")->on("users"); // users 테이블의 id 컬럼을 참조한다 (외래키)
            $table->foreign("to")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
