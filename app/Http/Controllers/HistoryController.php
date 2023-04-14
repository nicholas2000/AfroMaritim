<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Exports\ExportHistory;
use App\Models\LogUserModel;
use Maatwebsite\Excel\Facades\Excel;

class HistoryController extends Controller
{
    public function exporthistory()
    {
        return Excel::download(new ExportHistory, 'History.xlsx');
    }

    public function show()
    {
        $arrHistory = Transaksi::get();
        $arrNotif = LogUserModel::all();
        return view('admin.mHistory', compact('arrHistory', 'arrNotif'));
    }
    public function deletehistory(Request $request, $id)
    {

        Transaksi::where('nomor_transaksi',$id)->delete();
        $data_user_login=$request->session()->get("user_now");
        LogUserModel::create([
            "berita"=>$data_user_login["nama_pegawai"]." Berhasil delete history ".$id,
            "status"=>"0",
        ]);
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
            $data_user_login=$request->session()->get("user_now");
            LogUserModel::create([
                "berita"=>$data_user_login["nama_pegawai"]." Berhasil update nomor kapal ".$request->nkapal,
                "status"=>"0",
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

            $data_user_login=$request->session()->get("user_now");
            LogUserModel::create([
                "berita"=>$data_user_login["nama_pegawai"]." Berhasil edit history ".$req->jenis_barang,
                "status"=>"0",
            ]);
        if($result){
            return redirect('/masterHistory');
        }else{
            return redirect('/masterHistory');
        }
    }

}
