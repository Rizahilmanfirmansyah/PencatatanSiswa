<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = Notice::all();
        return view('Pengumuman.index', compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pengumuman.create');
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
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        $image = $request->file('foto');
        $image->storeAs('public/fotos', $image->hashName());

        $pengumuman = Notice::create([
            'foto'=>$image->hashName(),
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
        ]);
        session()->flash('success', 'Data Pengumuman Berhasil Di Tambahkan');
        return redirect()->route('pengumuman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::where('id', $id)->first();
        return view('pengumuman.detail', compact($notice));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::where('id', $id)->first();
        return view('pengumuman.update', compact($notice));
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
            'judul'=>'required',
            'deskripsi'=>'required'
        ]);

        $notice = Notice::where('id', $id)->first();

        if ($request->file('foto') == "") {
            # code...
            $notice->update([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi
            ]);
            
        }else{
            Storage::disk('local')->delete('public/fotos'.$notice->foto);

            $image = $request->file('foto');
            $image->storeAs('public/fotos', $image->hashName());

            $notice->update([
                'foto'=>$image->hashName(),
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi
            ]);

        }

        session()->flash('success', 'Pengumuman Berhasil Di Update');
        return redirect('pengumuman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::where('id', $id)->first();
        $notice->delete();
        session()->flash('success', 'Pengumuman Berhasil Di Hapus');
        return redirect()->route('pengumuman.index');
    }

}
