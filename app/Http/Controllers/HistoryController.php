<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Exports\ExportHistory;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\LogUserModel;

class HistoryController extends Controller
{
    public function exporthistory()
    {
        return Excel::download(new ExportHistory, 'History.xlsx');
    }

    public function show()
    {
        $param['arrHistory']=Transaksi::get();
        return view('admin.mHistory',$param);
    }
    public function deletehistory($id)
    {

        Transaksi::where('nomor_transaksi',$id)->delete();

        return redirect('/masterHistory');
    }
    public function updatehistory(Request $request)
    {
        $data = json_decode($request->data);
        foreach ($data as $prm) {
            Transaksi::where('nomor_resi',$prm)->update([
                // 'nomor_manifest' => $request->nmanifest,
                // 'nomor_container'=> $request->ncontainer,
                'nama_kapal'=> $request->nkapal,
                'nomor_segel'=> $request->nomor_segel
            ]);
        }

        return redirect('/masterHistory');
    }
    public function doEdit(Request $req){
        $depo = Transaksi::withTrashed()->find($req->nomor_resi);
        $result = $depo->update([
            'nama_pengirim'=>$req->nama_pengirim,
            'nama_penerima'=> $req->nama_penerima,
            'jenis_barang'=>$req->jenis_barang,
            'nomor_resi'=>$req->nomor_resi,
            'nomor_container'=>$req->nomor_container,
            'status_barang' => 'Depo SBY',

            ]);

        if($result){
            return redirect('/masterHistory');
        }else{
            return redirect('/masterHistory');
        }
    }

}
