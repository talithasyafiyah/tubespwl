<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = \DB::table('beritas')
                    ->join('users', 'users.id', '=', 'beritas.user_id')
                    ->get();
        return view('admin.berita', compact('beritas'));
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
        /* return $request->file('image')->store('berita-images'); */
        $validatedData = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal' => 'required',
            'image' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:3024',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('berita-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;

        Berita::create($validatedData);

        return redirect()->route('admin.berita')->with('success', 'Berhasil menambah data');

            /* if(request()->hasFile(key: 'image')){
                $image = request()->file(key: 'image')->getClientOriginalName();
                request()->file(key: 'image')->storeAs('/post-image', $image, options:'');
                $berita->update(['image'=>$image]);
            } */
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Berita::find($id);
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
        $berita = TRUE;
        return view('admin.editberita', ([
            'data'=>$data,
            'berita' => $berita
        ]));
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
