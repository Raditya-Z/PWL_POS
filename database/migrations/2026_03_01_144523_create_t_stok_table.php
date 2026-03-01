<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id');
            $table->unsignedBigInteger('supplier_id')->index(); // indexing untuk ForeignKey
            $table->unsignedBigInteger('barang_id')->index(); // indexing untuk ForeignKey
            $table->unsignedBigInteger('user_id')->index(); // indexing untuk ForeignKey
            $table->date('stok_tanggal');
            $table->integer('stok_jumlah');
            $table->timestamps();

            // Mendefinisikan ForeignKey pada kolom supplier_id yang mengacu pada supplier_id di tabel m_supplier
            $table->foreign('supplier_id')->references('supplier_id')->on('m_supplier');
            
            // Mendefinisikan ForeignKey pada kolom barang_id yang mengacu pada barang_id di tabel m_barang
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');

            // Mendefinisikan ForeignKey pada kolom user_id yang mengacu pada user_id di tabel m_user
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
