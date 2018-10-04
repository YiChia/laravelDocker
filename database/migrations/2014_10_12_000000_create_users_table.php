<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_employee', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_staff')->unique()->index();
            $table->string('acc')->unique()->index();
            $table->string('password');
            $table->integer('director_group');
            $table->integer('id_acc_group');
            $table->integer('id_dep_group');
            $table->integer('level');
            $table->text('permission')->nullable();
            $table->string('name');
            $table->text('remark');
            $table->integer('enable');
            $table->string('id_acc');
            $table->rememberToken();
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
        Schema::dropIfExists('tb_employee');
    }
}
