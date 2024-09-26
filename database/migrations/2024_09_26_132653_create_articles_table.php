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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("title",80);
            $table->text("body");
            $table->tinyInteger("is_active")->default(0);
            $table->string("slug_name"); //url'de kullanılacak
            $table->timestamps(); // created ve update date
            $table->charset = "utf8";
            $table->collation = "utf8_general_ci";

            // her bir makalenin hangi kategoriye ait olduğunu belli edeceğimiz foreign key oluşturacağız.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
