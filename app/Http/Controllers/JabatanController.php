<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;
// use App\Http\Requests\JabatanRequest;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('jabatan.index', ['jabatans'=>Jabatan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $jbrequest)
    {
        //hak akses utk proses simpan
        //bisa juga: $this->authorize('create', 'App\Jabatan');
        // $this->authorize('create', Jabatan::class);

        $validatedData = $jbrequest->validate([
            'nm_jabatan'=>'required'
        ]);
        Jabatan::create($validatedData);
        return redirect('/admin/jabatans')->with('pesan', "Jabatan $jbrequest->nm_jabatan Berhasil di tambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        // Ini model binding
        // return view('jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        //
        return view('jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $jbrequest, Jabatan $jabatan)
    {
        //
        $validatedData = $jbrequest->validate([
            'nm_jabatan'=>'required'
        ]);

        $jabatan->update($validatedData);
        return redirect('/admin/jabatans/')->with('pesan', "Jabatan $jabatan->nm_jabatan Berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        //
        // $this->authorize('delete', $jabatan);
        $jabatan->delete();
        return redirect('/admin/jabatans')->with('pesan', "Jabatan $jabatan->nm_jabatan berhasil dihapus");
    }
}
