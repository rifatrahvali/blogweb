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
        Schema::table('articles', function (Blueprint $table) {
            // her bir makalenin hangi kategoriye ait olduğunu belli edeceğimiz foreign key oluşturacağız.
            // foreign key'de kullanacağımız sütunlar eşleşebilmeleri özellikleri için aynı türde olmalıdır.
            $table->unsignedBigInteger("category_id")->after("body"); // articles tablosunda body sütunundan sonra ekle
            $table->foreign("category_id")
                ->references("id") //categoryies tablosundaki id
                ->on("categories") //hangi tablodan alacak
                ->onDelete("cascade"); //kategori silinirse makalede silinecek
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
};
