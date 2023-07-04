<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelurahan = Kelurahan::all();
        return view('Kelurahan.index', compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kelurahan' => 'required|unique:kelurahans,kelurahan',
            'kecamatan' => 'required',
            'kota' => 'required'
        ]);

        $data = new Kelurahan;
        $data->kelurahan = $request->kelurahan;
        $data->kecamatan = $request->kecamatan;
        $data->kota = $request->kota;
        $data->save();

        return redirect()->route('kelurahan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelurahan $kelurahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Kelurahan::find($id);
        return view('Kelurahan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Kelurahan::find($id);
        $data->kelurahan = $request->kelurahan;
        $data->kecamatan = $request->kecamatan;
        $data->kota = $request->kota;
        $data->save();

        return redirect()->route('kelurahan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelurahan $kelurahan)
    {
        //
    }
}
