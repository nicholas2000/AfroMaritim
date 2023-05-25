<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;

use App\Models\Activity;
use App\Models\LogUserModel;
use App\Models\modelpegawai;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class statusController extends Controller
{
    //
    public function showStatus()
    {
        $arrTransaksi=Transaksi::all()->sortBy("nomor_manifest");
        $arrNotif=LogUserModel::all();
        return view('admin.mStatus',compact('arrTransaksi', "arrNotif"));
    }
    public function searchTanggal(Request $req)
    {
        $tanggal_awal=$req->date_awal;
        $tanggal_akhir=$req->date_akhir;
        $arrTransaksi=Transaksi::whereBetween('tanggal', [$req->get('date_awal'), $req->get('date_akhir')])->get();
        return view('admin.mStatus',compact('arrTransaksi'));
    }
    public function updateStatus(Request $request)
    {
        $data = json_decode($request->data);
        dd($data);
        foreach ($data as $prm) {
            Transaksi::where('nomor_resi',$prm)->update([
                // 'nomor_manifest' => $request->nmanifest,
                // 'nomor_container'=> $request->ncontainer,
                'kurir'=> $request->namakurir,
            ]);
            $data_user_login=$request->session()->get("user_now");
            LogUserModel::create([
                "berita"=>$data_user_login["nama_pegawai"]." Berhasil Update kurir ".$request->namakurir,
                "status"=>"0",
            ]);
        }


        return redirect('/masterpengirimansatu');
    }
}
