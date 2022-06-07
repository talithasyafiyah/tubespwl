<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Berita;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //custom

    public function dashAdmin()
    {
        return view('admin.index');
    }

    public function siswa()
    {
        $siswas = \DB::table('siswas')
                    ->join('kelas', 'kelas.kelas_id', '=', 'siswas.kelas_id')
                    ->get();
        return view('admin.siswa', compact('siswas'));
    }

    public function kelas()
    {
        $kelass = Kelas::all();
        return view('admin.kelas', compact('kelass'));
    }

    public function confirm()
    {
        return view('admin.confirm');
    }

    public function report()
    {
        return view('admin.confirm');
    }

    public function berita()
    {
        $beritas = \DB::table('beritas')
                    ->join('users', 'users.id', '=', 'beritas.user_id')
                    ->get();
        return view('admin.berita', compact('beritas'));
    }

    public function addberita()
    {
        return view('admin.addberita');
    }
    
    public function deletetabungan($id)
    {
        dd($id);
        /* Tabungan::destroy($id);
        
        return back()->with('success', 'Berhasil menghapus data'); */

        /* dd($id);
        Tabungan::find($id)->delete();

        return redirect(route('admin.tabungan'))->with('success', 'Berhasil menghapus data'); */
    }
}
