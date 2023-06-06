<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\modelpegawai;
use App\Models\Pengiriman;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Exports\ExportKurir;
use App\Models\LogUserModel;
use Maatwebsite\Excel\Facades\Excel;

class pengirimancontroller extends Controller
{
    public function vmpengirimansatu(Request $request)
    {

        $arrContainer = Container::where('status', 1)->get();
        $arrPilih = Container::where('status', 1)->get();
        $arrHistory = Transaksi::all();
        $arrKurir = modelpegawai::where('role_pegawai', 'Kurir')->get();
        $arrNotif=LogUserModel::all();
        // $param['arrContainer'] = Container::get();
        // $param['arrHistory']=Transaksi::where('nomor_container', $param['arrContainer'])->get();
        return view('admin.mOpsi2',compact('arrContainer','arrKurir','arrHistory', "arrNotif"));
    }
    public function export()
    {
        return Excel::download(new ExportKurir, 'Kurir.xlsx');
    }

    // public function filterGudang($nocont)
    // {
    //     $param['arrContainer'] = Container::where('status', 1)->get();
    //     $param['arrHistory']=Transaksi::where('nomor_container', $noc$nocontet();
    //     return view('admin.mOpsi2',$param);
    // }
    public function vmpengirimandua()
    {
        return view("admin.mOpsi2");
    }
    public function updateKurir(Request $request)
    {
        $data = json_decode($request->data);
        if($data===null){
            return redirect('/masterpengirimansatu')->with('alert', 'Belom ada data yang dipilih!');
        }
        else{
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

}
