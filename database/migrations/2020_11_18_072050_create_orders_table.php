<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice')->unique();
            $table->string('customer_id');
            $table->timestamps();

            //BAGIAN INI MUNGKIN ADA YANG BERTANYA, KOK INFO INI DISIMPAN LAGI?
            //SEDANGKAN SUDAH ADA RELASI KE TABLE CUSTOMERS
            //HAL INI DILAKUKAN, JIKA SUATU SAAT CUSTOMER MENGUBAH PROFILENYA
            //SEHINGGA DATA ORDER TIDAK IKUT BERUBAH, JADI PERLU DISIMPAN INFONYA
            //KETIKA ORDER ITU DIBUAT SEBAGAI SALINAN INFORMASI
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_address');
            $table->unsignedBigInteger('district_id'); //FIELD INI AKAN MERUJUK KE TABLE districts
            $table->integer('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
