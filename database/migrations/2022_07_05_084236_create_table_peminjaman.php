<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_anggota');
            $table->bigInteger('id_pengguna');
            $table->date('tgl_pinjam');
            $table->bigInteger('id_buku');
            $table->string('status');
            $table->date('tgl_kembali');
            $table->integer('lama_terlambat');
            $table->bigInteger('id_denda');
            $table->integer('total_denda');
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
        Schema::dropIfExists('peminjaman');
    }
}
