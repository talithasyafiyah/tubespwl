<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabungans = \DB::table('tabungans')
                    ->join('siswas', 'siswas.NISN', '=', 'tabungans.NISN')
                    ->join('kelas', 'kelas.kelas_id', '=', 'tabungans.kelas_id')
                    ->get();
        return view('admin.tabungan', compact('tabungans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tabungans = \DB::table('tabungans')
                    ->join('siswas', 'siswas.NISN', '=', 'tabungans.NISN')
                    ->join('kelas', 'kelas.kelas_id', '=', 'tabungans.kelas_id')
                    ->get();
        return view('admin.addtabungan', compact('tabungans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        Tabungan::create($request->all());

        return redirect()->route('admin.tabungan')->with('success', 'Berhasil menambah data');
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
        $data = Tabungan::find($id);
        return view('admin.edittabungan', compact('data'));
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
        $data = Tabungan::find($id);
        $data->update($request->all());

        return redirect()->route('admin.tabungan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabungan::destroy($id);

        return redirect()->route('admin.tabungan')->with('success', 'Berhasil menghapus data');
    }
}
