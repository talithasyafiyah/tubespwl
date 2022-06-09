<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;
use App\Models\Siswa;


class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabungans = Tabungan::join('siswas', 'siswas.NISN', '=', 'tabungans.NISN')->where('status', 'pending')->get();
        return view('admin.confirm', compact('tabungans'));
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

    public function confirmAcc($id)
    {
        $data = Tabungan::find($id);

        $saldo = Siswa::where('NISN', $data['NISN'])->get()[0]['saldo'];

        $saldo += $data['jlh_setoran'];

        Siswa::where('NISN', $data['NISN'])->update([
            'saldo'=>$saldo
        ]);

        $data->status = 'accepted';
        $data->save();
        

        return redirect()->route('admin.confirm')->with('success', 'Data berhasil dikonfirmasi');
    }

    public function confirmReject($id)
    {
        $data = Tabungan::find($id);
 
        $data->status = 'rejected';
        
        $data->save();

        return redirect()->route('admin.confirm')->with('success', 'Data berhasil ditolak');
    }
}
