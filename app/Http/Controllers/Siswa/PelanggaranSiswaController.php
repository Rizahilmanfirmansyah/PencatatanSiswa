<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_pelanggaran;

class PelanggaranSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggarans = m_pelanggaran::all();
        return view('PelanggaranSiswa.index', compact('pelanggarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PelanggaranSiswa.create');
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
            'nama'=>'required',
            'bentuk_pelanggaran'=>'required'
        ]);

        $pelanggarans = m_pelanggaran::create([
            'nama'=>$request->nama,
            'bentuk_pelanggaran'=>$request->bentuk_pelanggaran,
        ]);

        return redirect()->route('pelanggaran.index');
        session()->flash('notif', 'Pelanggaran Siswa Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggarans = m_pelanggaran::where('id', $id)->first();
        return view('PelangaranSiswa.show', compact('pelanggarans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggarans = m_pelanggaran::where('id', $id)->first();
        return view('PelanggaranSiswa.edit', compact('pelanggarans'));
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
            'nama'=>'required',
            'kelas'=>'required'
        ]);

        $pelanggarans = m_pelanggaran::where('id', $id)->first;
        $pelanggarans->update([
            'nama'=>$request->nama,
            'bentuk_pelanggaran'=>$request->bentuk_pelanggaran,
        ]);

        return redirect()->route('pelanggaran.index');
        session()->flash('notif', 'Pelanggaran Siswa Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggarans = m_pelanggaran::where('id', $id)->first;
        $pelanggarans->delete();
        return redirect()->route('pelanggaran.index');
        session()->flash('notif', 'Pelanggaran Siswa Berhasil Di Hapus');
    }
}
