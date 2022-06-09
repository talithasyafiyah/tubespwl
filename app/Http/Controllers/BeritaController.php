<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.addberita', compact('beritas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $beritas = \DB::table('beritas')
                    ->join('users', 'users.id', '=', 'beritas.user_id')
                    ->get();
        return view('admin.addberita', compact('beritas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'judul' => 'required',
            'konten' => 'required',
            'admin' => 'required',
            'tanggal' => 'required',
            'image' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:20487',
        ]);
        $berita = new Berita;
        $berita->user_id = Auth::user()->id;
        $berita->judul=$request->judul;
        $berita->konten=$request->konten;
        $berita->admin =$request->admin;
        $berita->tanggal=$request->tanggal;
        $berita->image=$request->$nama_image;
        $berita->save();

            if(request()->hasFile(key: 'image')){
                $image = request()->file(key: 'image')->getClientOriginalName();
                request()->file(key: 'image')->storeAs('/post-image', $image, options:'');
                $berita->update(['image'=>$image]);
            }
            return redirect('admin.berita')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = Berita::find($id);
        return view('admin.editberita', compact('data'));
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
        $data = Berita::find($id);
        $data->update($request->all());

        return redirect()->route('admin.berita')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::destroy($id);

        return redirect()->route('admin.berita')->with('success', 'Berhasil menghapus data');
    }
}
