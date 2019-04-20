<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoiNghisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoi_nghis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tenHoiNghi');
            $table->string('diaDiem');
            $table->dateTime('thoiGianBatDau');
            $table->dateTime('thoiGianKetThuc');
            $table->longText('moTa');
            $table->longText('noiDung');
            $table->string('hinh');
            $table->integer('soLuongToiDa');
            $table->string('trangThai');
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
        Schema::dropIfExists('hoi_nghis');
    }
}
