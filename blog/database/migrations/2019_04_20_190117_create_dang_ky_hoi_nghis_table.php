<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDangKyHoiNghisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dang_ky_hoi_nghis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hoVaTen');
            $table->string('email');
            $table->string('soDienThoai');
            $table->bigInteger('idHoiNghi');
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
        Schema::dropIfExists('dang_ky_hoi_nghis');
    }
}
