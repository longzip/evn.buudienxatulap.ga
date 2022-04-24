<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evns', function (Blueprint $table) {
            $table->id();
            $table->string('ma')->unique();
            $table->string('ten')->nullable();
            $table->string('diaChi')->nullable();
            $table->string('soDienThoai')->nullable();
            $table->double('soTien', 8, 0)->nullable();
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
        Schema::dropIfExists('evns');
    }
}
