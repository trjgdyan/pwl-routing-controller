<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return 'Kirimkan pesan anda melalui <a href=mailto:trjgdyan@gmail.com>trjgdyan@gmail.com</a>';
    }
}