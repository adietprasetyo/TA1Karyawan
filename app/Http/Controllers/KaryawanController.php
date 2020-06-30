<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Telepon;
use App\Jabatan;
use App\Pendidikan;
use App\Status;

class KaryawanController extends Controller
{
    public function index(){
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create(){
        $jabatans = Jabatan::all();
        $pendidikans = Pendidikan::all();
        $statuses = Status::all();
        return view('karyawan.create', compact('jabatans', 'pendidikans', 'statuses'));
    }

    public function show(Karyawan $karyawan){
        // $karyawan = Karyawan::find($karyawan);
        return view('karyawan.show', compact('karyawan'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama'=>'required|min:3|max:50',
            'jenis_kelamin'=>'required|in:P,L',
            'umur'=>'required|integer',
            'status_id'=>'required',
            'jabatan_id'=>'required',
            'pendidikan_id'=>'required',
            'tgl_msk'=>'required'
        ]);
        // -- Cara Kedua: --
        // $karyawan = Karyawan::create($validatedData);
        
        $telepon = new Telepon;

        // -- Cara Pertama: --
        $karyawan = new Karyawan;
        $karyawan->nama = $validatedData['nama'];
        $karyawan->jenis_kelamin = $validatedData['jenis_kelamin'];
        $karyawan->umur = $validatedData['umur'];
        $karyawan->status_id = $validatedData['status_id'];
        $karyawan->jabatan_id = $validatedData['jabatan_id'];
        $karyawan->pendidikan_id = $validatedData['pendidikan_id'];
        $karyawan->tgl_msk = $validatedData['tgl_msk'];
        $karyawan->save();

        $telepon->no_tlp = $request->input('no_tlp');
        $karyawan->telepon()->save($telepon);
        $request->session()->flash('pesan', "Data {$validatedData['nama']} berhasil disimpan");
        return redirect()->route('karyawans.index');

        // return "Data berhasil disimpan";
        // dump($validatedData);
    }

    public function edit(Karyawan $karyawan)
    {
        // $result = Karyawan::find($karyawan);
        $jabatans = Jabatan::all();
        $pendidikans = Pendidikan::all();
        $statuses = Status::all();
        $karyawan->no_tlp = $karyawan->telepon->no_tlp;
        $dateMsk = strtotime($karyawan->tgl_msk);
        $tgl_msk = date('Y-m-d', $dateMsk);
    
        return view('karyawan.edit', compact('karyawan', 'jabatans', 'pendidikans', 'statuses', 'tgl_msk'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $validatedData = $request->validate([
            'nama'=>'required|min:3|max:50',
            'jenis_kelamin'=>'required|in:P,L',
            'umur'=>'required|integer',
            'status_id'=>'required',
            'jabatan_id'=>'required',
            'pendidikan_id'=>'required',
            'tgl_msk'=>'required'
        ]);
        $telepon = new Telepon;
        $telepon->no_tlp = $request->input('no_tlp');
        $karyawan->telepon()->update(['no_tlp' => $telepon->no_tlp]);
        $karyawan->update($validatedData);
        return redirect()->route('karyawans.index')->with([
            'status' => 'perbarui',
            'message' => $validatedData['nama']
        ]);
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawans.index')->with([
            'status' => 'delete',
            'message' => $karyawan->nama
        ]);
    }
}
