<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Hangi tabloya denk gelecek farklı modeli articles tablosuna eşitleyeceksek yazarız
    // protected $table = "articles";

    // doldurabilen alanları yazıyoruz
    protected $fillable = ["title","body","is_active","category_id","slug_name"];
    // hangilerini hariç tutacağız
    // fillable kullanılacak // guarded içine yazdığımızın haricini doldur demek
    protected $guarded = []; // tüm alanları kullanacağız.
    // timestamps false ise created updated yazılmaz
    // visible hangi alanlara ulaşacak. api kullanırsak cevap vermede işe yarar.

}
