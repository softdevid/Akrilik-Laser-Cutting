<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index', [
            "title" => "BERANDA"
        ]);
    }
    public function services()
    {
        return view('home/services', [
            "title" => "LAYANAN",
        ]);
    }
    public function portfolio()
    {
        return view('home/portfolio', [
            "title" => "HASIL KERJA",
        ]);
    }
    public function talk()
    {
        return view('home/lets-talk', [
            "title" => "KONTAK",
        ]);
    }
    public function product()
    {
        return view('home/product', [
            "title" => "PRODUK",
        ]);
    }
    public function profile()
    {
        return view('about/profile', [
            "title" => "PROFIL",
        ]);
    }
    public function team()
    {
        return view('about/team', [
            "title" => "TIM",
        ]);
    }
    public function workphase()
    {
        return view('about/work-phase', [
            "title" => "FASE KERJA",
        ]);
    }
    public function sow()
    {
        return view('about/sow', [
            "title" => "LINGKUP PEKERJAAN",
        ]);
    }
    public function faq()
    {
        return view('about/faq', [
            "title" => "RUANG PERTANYAAN",
        ]);
    }
}
