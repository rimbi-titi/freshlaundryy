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
    Schema::create('pesanans', function (Blueprint $table) {
        $table->id('pesanan_id');
        $table->string('nama');
        $table->integer('telepon');
        $table->foreignId('layanan_id');
        $table->string('alamat');
        $table->integer('status'); #0 diproses, 1 dikirim, 2 selesai
        $table->integer('user_id');
        $table->timestamps();
    });
}
/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('pesanans');
}
};