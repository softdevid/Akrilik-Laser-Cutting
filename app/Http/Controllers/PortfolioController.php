<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      	$title = 'HASIL KERJA';
        $portfolio = Portfolio::all();
        $huruftimbul = Portfolio::where('nama_kategori', 'huruf timbul')->get();
        $neon = Portfolio::where('nama_kategori', 'neon box')->get();
        $reklame = Portfolio::where('nama_kategori', 'papan reklame')->get();
        $digital = Portfolio::where('nama_kategori', 'digital creative')->get();
        $iot = Portfolio::where('nama_kategori', 'iot')->get();
        return view('home.portfolio', ['title' => $title, 'portfolio' => $portfolio, 'huruftimbul' => $huruftimbul, 'neon' => $neon, 'reklame' => $reklame, 'digital' => $digital, 'iot' => $iot]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
