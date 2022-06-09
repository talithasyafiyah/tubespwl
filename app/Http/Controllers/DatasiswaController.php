<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;

class DatasiswaController extends Controller
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
        $kelass = Kelas::all();
        $siswas = \DB::table('siswas')
                    ->join('kelas', 'kelas.kelas_id', '=', 'siswas.kelas_id')
                    ->get();
        return view('admin.addsiswa', compact('siswas', 'kelass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create($request->all());

        return redirect()->route('admin.siswa')->with('success', 'Berhasil menambah data');
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
        $kelass = Kelas::all();
        $data = Siswa::find($id);
        return view('admin.editsiswa', compact('data', 'kelass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $NISN = (int) $request->NISN;
        /* $siswa = Siswa::where('NISN', $NISN)->get(); */

        Siswa::where('NISN', $NISN)->update([
            'NISN'=> $request->NISN,
            'nama'=> $request->nama,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
            'saldo'=>$request->saldo
        ]);

      /*   $data = Siswa::find($id);
        $data->update($request->all()); */

        return redirect()->route('admin.siswa')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::destroy($id);

        return redirect()->route('admin.siswa')->with('success', 'Berhasil menghapus data');
    }
}
