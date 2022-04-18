<?php

namespace App\Http\Controllers;

use App\Models\Bukutamu;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class BukutamuDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.DaftarTamu',[
            'pageTitle' => 'Daftar Tamu',
            'listTamu' => Bukutamu::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.InputTamuBaru', [
            'pageTitle' => 'Input Tamu Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|numeric|min:11',
            'keperluan' => 'required',
        ]);

        Bukutamu::create($validated);
        return redirect('/dashboard/bukutamus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function show(Bukutamu $bukutamu)
    {

        return view('Dashboard.DetailTamu', [
            'pageTitle' => 'Data Detail Tamu',
            'tamu' => $bukutamu,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function edit(Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bukutamu $bukutamu)
    {
        //
    }
}