<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->bigInteger('id_pengarang');
            $table->bigInteger('id_kategori');
            $table->bigInteger('id_penerbit');
            $table->string('ISBN');
            $table->string('tahun_terbit');
            $table->string('bahasa');
            $table->integer('stok');
            $table->longText('foto');
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
        Schema::dropIfExists('buku');
    }
}
