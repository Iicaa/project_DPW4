<?php

namespace App\Http\Controllers;
class HomeController extends Controller{

function showBeranda(){
    return view('admin.section.Beranda');
}

function showproduk(){
    return view('admin.section.produk');
}

function showKategori(){
    return view('admin.section.Kategori');
}

function showlogin_admin(){
    return view('admin.section.login_admin');
}
}

