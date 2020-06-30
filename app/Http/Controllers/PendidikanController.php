<?php

namespace App\Http\Controllers;

use App\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('pendidikan.index', ['pendidikans'=>Pendidikan::all()]);
        $pendidikans = Pendidikan::all();
        return view('pendidikan.index', compact('pendidikans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $pdrequest)
    {
        //hak akses utk proses simpan
        //bisa juga: $this->authorize('create', 'App\Pendidikan');
        // $this->authorize('create', Pendidikan::class);

        $validatedData = $pdrequest->validate([
            'nm_pendidikan'=>'required'
        ]);
        Pendidikan::create($validatedData);
        return redirect('/admin/pendidikans')->with('pesan', "Pendidikan $pdrequest->nm_pendidikan Berhasil di tambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidikan $pendidikan)
    {
        // Ini model binding
        // return view('pendidikan.show', compact('pendidikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendidikan $pendidikan)
    {
        //
        return view('pendidikan.edit', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $pdrequest, Pendidikan $pendidikan)
    {
        //
        $validatedData = $pdrequest->validate([
            'nm_pendidikan'=>'required'
        ]);

        $pendidikan->update($validatedData);
        return redirect('/admin/pendidikans/')->with('pesan', "Pendidikan $pendidikan->nm_pendidikan Berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendidikan $pendidikan)
    {
        //
        // $this->authorize('delete', $pendidikan);
        $pendidikan->delete();
        return redirect('/admin/pendidikans')->with('pesan', "Pendidikan $pendidikan->nm_pendidikan berhasil dihapus");
    }
}
