<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Redirect;
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

    public function buatProfil()
    {
        $sis = Siswa::all();
        $x = Kelas::all();
        return view('siswa.buatprofil', compact( 'x', 'sis'));
    }
    
    public function storeProfil(Request $request)
    {
        //yang bagian NONE
        $request->validate([
            'nisn'=>'required|max:10',
            'nama'=> 'required|max:50',
            'alamat'=>'required',
            'no_hp'=>'required|max:13',
            'kelas_id'=>'required',   
        ]);

        $siswa = new Siswa;
        $siswa->nisn =$request->nisn;
        $siswa->nama =$request->nama;
        $siswa->alamat=$request->alamat;
        $siswa->no_hp=$request->no_hp;
        $siswa->saldo= 0;
        $siswa->kelas_id=$request->kelas_id;
        $siswa->user_id= Auth::user()->id;
        $siswa->save();
        
       
        return redirect('/Profil')->with('success', 'Berhasil Membuat Profil!');
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
            'tgl_setoran'=>'required',
            'jlh_setoran'=>'required',
            'payment'=>'required',
            'no_rekening'=>'required',
        ]);
        $tabungan = new Tabungan;
        $tabungan->NISN=$request->NISN;
        $tabungan->jlh_setoran=$request->jlh_setoran;
        $tabungan->tgl_setoran=$request->tgl_setoran;
        $tabungan->payment=$request->payment;
        $tabungan->no_rekening=$request->no_rekening;
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

    //Masih ERROR
    public function edit($id)
    {
        // $sis = Siswa::all();
        $x= Kelas::all();
        $sis = Siswa::find($id);
        return view('siswa.editprofil', compact('sis', 'x'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Masih ERROR
    public function update(Request $request, $id)
    {
        $x = Kelas::all();
        $sis = Siswa::find($id);
        $sis->update($request->except(['_token', 'submit']));
        return redirect('siswa.siswa', compact('x'))->with('success', 'Profil berhasil diedit!');
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
        $saldo = DB::table('siswas')
                    ->where('siswas.user_id', '=', Auth::user()->id)
                    ->sum('saldo');
        // $setoran = DB::table('tabungans')
        //             ->join('siswas', 'siswas.NISN', '=', 'tabungans.NISN')
        //             ->join('siswas', 'siswas.user_id', '=', 'tabungans.user_id')
        //             ->whereColumn([
        //                 ['status', '=', 'accepted'],
        //                 ['tabungans.user_id', '=', Auth::user()->id],
        //                 ])->sum('jlh_setoran');
        //             ->where('status', '=', 'accepted') 
        //             ->where ('user_id', '=', Auth::user()->id)
        //             ->sum('jlh_setoran')
        //             ->get();
        $datas = DB::table('siswas')
                    ->join('kelas', 'kelas.kelas_id', '=', 'siswas.kelas_id')
                    ->where('siswas.user_id', '=', Auth::user()->id)
                    ->get();
         $x = DB::table('tabungans')
                    ->join('siswas', 'siswas.NISN', '=', 'tabungans.NISN')
                    /* ->join('kelas', 'kelas.kelas_id', '=', 'tabungans.kelas_id') */
                    ->where('user_id', '=', Auth::user()->id)
                    ->get();
        // $x = DB::table('tabungans')
        //         ->join('siswas', 'siswas.NISN', 'tabungans.NISN')
        //         ->where('tabungans.NISN', '=', $datas->NISN) 
        //         ->where('siswa.user_id', '=', Auth::user()->id)
        //         ->get();
        return view('siswa.siswa',[
                'x' => $x,
            'datas' => $datas,
            'saldo' => $saldo,
            // 'setoran' => $setoran,
            // 'total'=> $total,

        ]);
    }

    public function Tabungan()
    {
        $x = Kelas::all();
        return view('siswa.tabungan', compact( 'x'));
    }

    public function Transaksi()
    {
        return view('siswa.transaksi');
    }

    public function Report()
    {
        $tabungan=Tabungan::all();
        return view('siswa.report',compact('tabungan'));
    }
}
