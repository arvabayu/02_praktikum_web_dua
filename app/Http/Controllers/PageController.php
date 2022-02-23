<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return ('Selammat datang guys');
    }
    public function about(){
        return ('2041720116-Arva Bayu Susanto');
    }
    public function article($id){
        return ("Halaman Artikel dengan ID $id ");
    }
}
