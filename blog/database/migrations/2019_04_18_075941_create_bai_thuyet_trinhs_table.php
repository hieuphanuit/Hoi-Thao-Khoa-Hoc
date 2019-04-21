<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaiThuyetTrinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_thuyet_trinhs', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('tenBaiThuyetTrinh');
            $table->bigInteger('idHoiNghi');
            $table->bigInteger('idNguoiThuyetTrinh');
            $table->longText('moTa');
            $table->longText('noiDung');
            $table->string('doDai');
            $table->string('trangThai');
            $table->dateTime('thoiGianBatDau')->nullable();
            $table->dateTime('thoiGianKetThuc')->nullable();
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
        Schema::dropIfExists('bai_thuyet_trinhs');
    }
}
