<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('email',100)->unique()->index(); //index() xác định mức độ ưu tiên khi tìm kiếm
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone',20)->nullable($value = true);
            $table->string('address',400)->nullable($value = true);
            $table->string('avatar', 3000)->default('thumbnail/default.png');
            $table->string('info_more',3000)->nullable($value= true); // cho phép giá trị null
            $table->tinyInteger('gender')->nullable($value = true);
            $table->dateTime('birthday')->default('1925-01-01 00:00:00');
            $table->string('level')->default('0');
            $table->string('password');
            $table->boolean('admin')->default($value = true);
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
        Schema::dropIfExists('users');
    }
}
