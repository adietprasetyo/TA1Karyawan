<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('status.index', ['statuses'=>Status::all()]);
        $statuses = Status::all();
        return view('status.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $strequest)
    {
        //hak akses utk proses simpan
        //bisa juga: $this->authorize('create', 'App\Status');
        // $this->authorize('create', Status::class);

        $validatedData = $strequest->validate([
            'nm_status'=>'required|unique:statuses'
        ]);
        Status::create($validatedData);
        return redirect('/admin/statuses')->with('pesan', "Status $strequest->nm_status Berhasil di tambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        // Ini model binding
        // return view('status.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        //
        return view('status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $strequest, Status $status)
    {
        //
        $validatedData = $strequest->validate([
            'nm_status'=>'required|unique:statuses,nm_status'
        ]);

        $status->update($validatedData);
        return redirect('/admin/statuses/')->with('pesan', "Status $status->nm_status Berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        //
        // $this->authorize('delete', $status);
        $status->delete();
        return redirect('/admin/statuses')->with('pesan', "Status $status->nm_status berhasil dihapus");
    }
}
