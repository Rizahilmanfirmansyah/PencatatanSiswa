<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatanSiswa;

class CatatanSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catatans = CatatanSiswa::all();
        $test = CatatanSiswa::where('gender', 'male')->get();
        $female = CatatanSiswa::where('gender', 'female')->get();
        return view('CatatanSiswa.index', compact('catatans', 'test', 'female'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CatatanSiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'alasan' => 'required'
        ]);

        $catatan = CatatanSiswa::create([
            'nama'=>$request->nama,
            'kelas' => $request->kelas,
            'alasan' => $request->alasan
        ]);

        session()->flash('notif','Catatan Siswa Berhasil Di Tambahkan');
        return redirect()->route('catatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catatan_detail = CatatanSiswa::where('id', $id)->first();
        return view('CatatanSiswa.detail', compact('catatan_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catatan = CatatanSiswa::where('id', $id)->first();
        return view('CatatanSiswa.edit', compact('catatan'));
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
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'alasan' => 'required'

        ]);

        $catatan = CatatanSiswa::where('id', $id)->first();

        $catatan->update([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'alasan'=> $request->alasan
        ]);

        session()->flash('notif', 'Data Berhasil Di Update');
        return redirect()->route('catatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catatan = CatatanSiswa::where('id', $id);
        $catatan->delete();
        session()->flash('notif', 'Data Berhasil Di Hapus');
        return redirect()->route('catatan.index');
    }
}
