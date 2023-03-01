<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang';
       }
    
    public function about() {
        return 'Nama : Tri Jagad Ariyani || NIM : 2141720049';
       }
    public function articles($id) {
        return "Halaman Artikel dengan Halaman ID " . $id;
       }
    
}