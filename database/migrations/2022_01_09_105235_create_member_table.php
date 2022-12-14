<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafe_member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_member',5)->unique();
            $table->string('nm_member',100);
            $table->string('alamat',100);
            $table->string('kota',50);
            $table->string('telp',15)->unique();
            $table->integer('jk');
            $table->text('foto');
            $table->integer('status');
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
        Schema::dropIfExists('cafe_member');
    }
}
