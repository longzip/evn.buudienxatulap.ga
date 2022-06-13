<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khls', function (Blueprint $table) {
            $table->id();
            $table->string('soDienThoai')->unique();
            $table->string('ten')->nullable();
            $table->string('diaChi')->nullable();
            $table->double('soTien', 8, 0)->nullable();
            $table->double('ghiNo', 8, 0)->nullable();
            $table->boolean('completed')->nullable()->default(0);
            $table->boolean('disabled')->nullable()->default(0);
            $table->string('ghiChu')->nullable();
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
        Schema::dropIfExists('khls');
    }
}
