<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabunganController extends Controller
{
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
