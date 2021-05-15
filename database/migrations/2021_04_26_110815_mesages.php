<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mesages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('messages', function (Blueprint $table) {
                $table->id();
                $table->String('email');
                $table->String('nama_pemesan');
                $table->String('alamat');
                $table->String('nama_produk');
                $table->String('no_hp');
                $table->string('jumlah');
                $table->String('pesan');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
