<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;
use App\Models\Siswa;
use App\Models\Kelas;


class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = \DB::table('siswas')->select('saldo');
        $setoran = \DB::table('tabungans')->select('jlh_setoran');

        $siswa->saldo += $setoran->jlh_setoran;

        $tabungans = \DB::table('tabungans')
                    ->join('siswas', 'siswas.NISN', '=', 'tabungans.NISN')
                    ->join('kelas', 'kelas.kelas_id', '=', 'tabungans.kelas_id')
                    ->where('status', 'accepted')
                    ->get();
        return view('admin.tabungan', compact('tabungans', 'saldo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelass = Kelas::all();
        $tabungans = \DB::table('tabungans')
                    ->join('siswas', 'siswas.NISN', '=', 'tabungans.NISN')
                    ->join('kelas', 'kelas.kelas_id', '=', 'tabungans.kelas_id')
                    ->get();
        return view('admin.addtabungan', compact('tabungans', 'kelass'));
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
    // public function pdfview(Request $request)
    // {
    //     $items = DB::table("items")->get();
    //     view()->share('items',$items);


    //     if($request->has('download')){
    //         $pdf = PDF::loadView('pdfview');
    //         return $pdf->download('pdfview.pdf');
    //     }
    // }
}
