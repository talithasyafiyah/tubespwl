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
        $tabungans = \DB::table('tabungans')
                    ->join('siswas', 'siswas.NISN', '=', 'tabungans.NISN')
                    ->where('status', 'accepted')
                    ->get();

        /* dd($tabungans); */
        return view('admin.tabungan', compact('tabungans'));
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

        if(auth()->user()->level === 'Admin') {

            $saldo = Siswa::where('NISN', $request->NISN)->get()[0]['saldo'];
            $saldo += $request->jlh_setoran;
            
            Tabungan::create([
                'NISN'=>$request->NISN,
                'jlh_setoran'=> $request->jlh_setoran,
                'tgl_setoran'=>$request->tgl_setoran,
                'payment'=>$request->payment,
                'no_rekening'=>$request->no_rekening,
                'status' => 'accepted'
            ]);

            Siswa::where('NISN', $request->NISN)->update([
                'saldo'=>$saldo
            ]);

        } else {
            /* dd($request->all()); */
            Tabungan::create($request->all());
        }

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
        $data = Tabungan::find($id);
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
        $tabungan = TRUE;
        return view('admin.edittabungan', ([
            'data'=>$data,
            'tabugan' => $tabungan
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
        $tabungan = Tabungan::where('tabungan_id', $id)->get()[0];
        $saldo = Siswa::where('NISN', $tabungan['NISN'])->get()[0]['saldo'];
        
        $saldo -= $tabungan['jlh_setoran'];
        
        Siswa::where('NISN', $tabungan['NISN'])->update([
            'saldo'=>$saldo
        ]);

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
