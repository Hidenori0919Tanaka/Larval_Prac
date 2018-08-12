<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');

            $table->string('item_name'); 
            $table->integer('item_number'); 
            $table->integer('item_amount'); 
            $table->datetime('published');

            $table->timestamps();
            // $table->increments('id'); //ID 自 動 採 番 （主 キー）
            // $table->string('email'); //VARCHAR カラム
            // $table->string('name', 100); //VARCHAR, 長 さ 指定 カラム
            // $table->integer('price'); //INTEGER カラム 
            // $table->text('description'); //TEXT カラム 
            // $table->dateTime('created_at'); //DATETIME カラム 
            // $table->timestamps(); //created_at と update_at カラムを 追加 
            // $table->boolean('confirmed'); //true, false カラム 
            // $table->json('meta'); //JSON カラム

            // $table->string('email')->nullable();//カラムに NULL を 許 可 する
            // $table->string('email')->unique();// 指定 したカラムの値 を 一意 にする
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
