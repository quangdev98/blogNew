<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('tenkhongdau', 300)->nullable();
            $table->string('email',100)->nullable($value = true)->index();
            $table->string('phone',20)->nullable($value = true);
            $table->tinyInteger('level')->default(2)->comment('Cấp độ phân quyền: 1: Tài khoản hệ thống - 2: Tài khoản viết bài - 3: Tài khoản quản lý bài viết');
            $table->string('info_more', 3000)->nullable($value = true);
            $table->string('avatar', 3000)->default('thumbnail/default.png');
            $table->tinyInteger('gender')->nullable($value = true);
            $table->dateTime('birthday')->default('1990-01-01 00:00:00');
             $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author');
    }
}
