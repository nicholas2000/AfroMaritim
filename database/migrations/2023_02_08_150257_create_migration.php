<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_tcabang', function (Blueprint $table) {
            $table->string('id_cabang')->primary();
            $table->string('nama_cabang');
            $table->string('jum_cabang');
            $table->string('alamat_cabang');
            $table->string('provinsi_cabang');
            $table->string('kota_cabang');
            $table->string('kodepos_cabang');
            $table->string('telpon_cabang');
            $table->string('gmaps_cabang');
            $table->string('email_cabang');
            $table->string('status_cabang');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('master_tpegawai', function (Blueprint $table) {
            $table->string('id_pegawai')->primary();
            $table->string('id_cabang');
            $table->foreign('id_cabang')->references('id_cabang')->on('master_tcabang');
            $table->string('nama_pegawai');
            $table->string('npwp_pegawai');
            $table->string('alamat_pegawai');
            $table->string('provinsi_pegawai');
            $table->string('kota_pegawai');
            $table->string('kodepos_pegawai');
            $table->string('telp_pegawai');
            $table->string('email_pegawai');
            $table->string('role_pegawai');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('master_tcustomer', function (Blueprint $table) {
            $table->string('id_customer')->primary();
            $table->string('id_cabang');
            $table->foreign('id_cabang')->references('id_cabang')->on('master_tcabang');
            $table->string('nama_customer');
            $table->string('npwp')->nullable();
            $table->string('jalan');
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('telpon');
            $table->string('email')->nullable();
            $table->string('pajak');
            $table->string('status_hutang');
            $table->string('total_hutang')->nullable();
            $table->string('batas_pembayaran')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('transaksi', function (Blueprint $table) {
            $table->string('nomor_transaksi')->primary();
            $table->string('id_customer');
            $table->foreign('id_customer')->references('id_customer')->on('master_tcustomer');
            $table->string('nama_barang');
            $table->string('id_admin');
            $table->string('volume')->nullable();
            $table->string('berat')->nullable();
            $table->string('rute');
            $table->string('harga');
            $table->string('jenis_harga');
            $table->string('harga_tambahan')->nullable();
            $table->string('persentase')->nullable();
            $table->string('total_harga');
            $table->string('no_container')->nullable();
            $table->string('nama_kapal')->nullable();
            $table->date('tanggal_berangkat');
            $table->string('nomor_manifest')->nullable();
            $table->string('link_foto')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('master_tkompetitor', function (Blueprint $table) {
            $table->string('id_kompetitor')->primary();
            $table->string('nama_kompetitor');
            $table->string('npwp_kompetitor');
            $table->string('alamat_kompetitor');
            $table->string('provinsi_kompetitor');
            $table->string('kodepos_kompetitor');
            $table->string('telp_kompetitor');
            $table->string('email_kompetitor');
            $table->string('rute_kompetitor');
            $table->string('namabank_kompetitor');
            $table->string('norek_kompetitor');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('activity');
            $table->string('ip_address');
            $table->string('browser');
            $table->string('os');
            $table->timestamps();
        });
        Schema::create('master_tjenis', function (Blueprint $table) {
            $table->string('tipe')->primary();
            $table->string('jenis_harga');
            $table->string('nominal');
            $table->timestamps();
        });
        Schema::create('master_tcontainer', function (Blueprint $table) {
            $table->id();
            $table->string('no_container');
            $table->string('nama_container');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('master_tkompetitor');
        Schema::dropIfExists('master_tcustomer');
        Schema::dropIfExists('master_tpegawai');
        Schema::dropIfExists('master_tcabang');
        Schema::dropIfExists('activity');
        Schema::dropIfExists('master_tjenis');
        Schema::dropIfExists('master_tcontainer');
    }
}
