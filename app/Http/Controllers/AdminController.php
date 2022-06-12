<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Berita;
use App\Models\Tabungan;
use Carbon\Carbon;


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
        $siswa = Siswa::all()->count();
        $kelas = Kelas::all()->count();
        $tabungan = Tabungan::all()->count();
        $saldo = \DB::table('siswas')->sum('saldo');

        $data = Tabungan::select('tabungan_id', 'tgl_setoran')->get()->groupBy(function($data){
            return Carbon::parse($data->tgl_setoran)->format('M');
        });

        $months = [];
        $monthCount = [];

        foreach($data as $month => $values) {
            $months[] = $month;
            $monthCount[] = count($values);
        }

        return view('admin.index', [
            'data' => $data,
            'months' => $months,
            'monthCount' => $monthCount,
            'siswa' => $siswa,
            'kelas' => $kelas,
            'tabungan' => $tabungan,
            'saldo' => $saldo,
        ]);
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

    public function deletekelas($id)
    {
        Kelas::destroy($id);

        return redirect()->route('admin.kelas')->with('success', 'Berhasil menghapus data');

    }

    public function confirm()
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

}
