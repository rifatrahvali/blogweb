<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActicleController extends Controller
{
    public function index()
    {
        // Listelemek için kullanılır
        dd("index");
    }

    public function create()
    {
        // Ekranı göstereceğimiz fonksiyon
    }

    public function store(Request $request)
    {
        // veritabanına veri kayıt ekmek için kullanacağız
    }

 
    public function show(string $id)
    {
        // veritabanından herhangi bir veriyi göstermek için kullanacağız
    }

    public function edit(string $id)
    {
        // önce veriyi göreceğiz sonra düzenleyeceğiz.
        // veritabanından herhangi bir veriyi düzenlemek için kullanacağız
    }

    public function update(Request $request, string $id)
    {
        // önce veriyi göreceğiz sonra düzenleyeceğiz.
        // veritabanından herhangi bir veriyi güncellemek için kullanacağız
    }


    public function destroy(string $id)
    {
        // veritabanından veri silmek için kullanacağız.
    }
}
