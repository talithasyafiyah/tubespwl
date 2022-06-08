<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Tabungan;

class SiswaController extends Controller
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
        //yang bagian NONE
        $request->validate([
            // 'nisn'=>'required|max:10',
            // 'nama'=> 'required|max:50',
            // 'alamat'=>'required',
            // 'no_hp'=>'required|max:13',
            // 'saldo'=>'required',
            // 'kelas_id'=>'required',
            // 'user_id'=>'required',
            'tgl_setoran'=>'required',
            'jlh_setoran'=>'required',
            'payment'=>'required',
            'no_rekening'=>'required',
        ]);

        // $siswa = new Siswa;
        // $siswa->nisn =$request->nisn;
        // $siswa->nama =$request->nama;
        // $siswa->alamat=$request->alamat;
        // $siswa->no_hp=$request->no_hp;
        // $siswa->saldo=$request->saldo;
        // $siswa->kelas_id=$request->kelas_id;
        // $siswa->user_id=$request->user_id;
        // $siswa->save();
        
        $tabungan = new Tabungan;
        $tabungan->nisn=$request->nisn;
        $tabungan->jlh_setoran=$request->jlh_setoran;
        $tabungan->tgl_setoran=$request->tgl_setoran;
        $tabungan->payment=$request->payment;
        // $tabungan->status=$request->status;
        $tabungan->no_rekening=$request->no_rekening;
        $tabungan->kelas_id=$request->kelas_id;
        $tabungan->save();
        return redirect('/Tabungan')->with('success', 'Berhasil menabung!!!!');
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

     public function dashSiswa()
    {
        $beritas = Berita::all();
        return view('siswa.index', compact('beritas'));
    }

    public function Siswa()
    {
        $x = Tabungan::all();
        $user = Auth::user()->id;
        $data = $user;
        // $data = Siswa::all();
        $data = \DB::table('siswas')
                    ->join('users', 'users.id', '=', 'siswas.user_id')
                    // ->where('id', $user)
                    ->get();
        // $data = array(
        //     'Auth::user()->id'=> "data",
        //     'data'=>Siswa::all()
        // );
        $data->nisn  = Auth::user()->id;
        $data->nama  = Auth::user()->id;
        $data->nama  = Auth::user()->id;
        $data->alamat= Auth::user()->id;
        $data->no_hp = Auth::user()->id;
        $data->saldo = Auth::user()->id;
        $data->kelas_id=Auth::user()->id;
        return view('siswa.siswa',compact('data', 'user', 'x'));
    }

    public function Tabungan()
    {
        $x = Kelas::all();
        // $tabungans belum dipanggil
        $tabungans = DB::table('tabungans')
                    ->join('siswas', 'siswas.NISN', '=', 'tabungans.NISN')
                    ->join('kelas', 'kelas.kelas_id', '=', 'tabungans.kelas_id')
                    ->get();
        return view('siswa.tabungan', compact('tabungans', 'x'));
    }

    public function Transaksi()
    {
        return view('siswa.transaksi');
    }

    public function Report()
    {
        return view('siswa.report');
    }
}
