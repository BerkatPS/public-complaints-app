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
        Schema::table('input_aspirasi', function (Blueprint $table) {
            $table->uuid('id_pelaporan');
            $table->string('nama',255);
            $table->bigInteger('nik',16);
            $table->bigInteger('id_kategori');
            $table->text('lokasi');
            $table->text('keterangan');
            $table->enum('status',['Menunggu','Proses','Selesai']);
            $table->tinyInteger('feedback');
            
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
        Schema::dropIfExists('input_aspirasi');
    }
};
