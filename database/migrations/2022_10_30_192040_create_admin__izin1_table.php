<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin__izin1', function (Blueprint $table) {
            $table->increments('id', 36);
            $table->char('id_pegawai', 36);
            $table->string('nama', 255);
            $table->string('nip', 255);
            $table->string('dari_tanggal', 255);
            $table->string('sampai_tanggal', 255);
            $table->string('perihal', 255);
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
        Schema::dropIfExists('admin__izin1');
    }
};
