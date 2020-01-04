<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTambahBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kategori_id');
            $table->bigInteger('user_id');
            $table->string('judul');
            $table->string('isi');
            $table->integer('jbaca');
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
        Schema::dropIfExists('tambah_blog');
    }
}
