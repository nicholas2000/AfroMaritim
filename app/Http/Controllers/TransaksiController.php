<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\modelJenisHarga;
use App\Models\Transaksi;
use App\Models\Depo;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

use App\Exports\ExportTransaksi;
use Maatwebsite\Excel\Facades\Excel;

class TransaksiController extends Controller
{
    public function export()
    {
        return Excel::download(new ExportTransaksi, 'Transaksi.xlsx');
    }

    public function showHistory()
    {
        $param['arrHistory']=Transaksi::get();
        return view('admin.mHistory',$param);
    }
    public function showtransaksi(Request $req)
    {
        $param['arrJenisHarga']=modelJenisHarga::get();
        // $param['totalTrans']=Transaksi::where('nomor_transaksi', 'like', '%TC%');
        // // $param['kodeTrans']=Transaksi::where
        // $mytime = Carbon::now()->format('m-Y');
        // $param['time'] = $mytime->toDateTimeString();
        // $time = date('y-m');
        // $first = "TC{$time}";
        // $totalTrans = Transaksi::where('nomor_resi', 'like', "%{$first}%")->count() + 1;
        // $newTrans = "";
        // if($totalTrans<10){
        //     $newTrans = "{$first}-00{$totalTrans}";
        // }else if($totalTrans<100){
        //     $newTrans = "{$first}-0{$totalTrans}";
        // }else{
        //     $newTrans = "{$first}-{$totalTrans}";
        // }
        // $param['kodeTrans'] = $newTrans;
        // $param['total'] = $totalTrans;
        return view('admin/mTransaksi',$param);
    }

    public function doAdd(Request $req)
    {
        $req->validate(
            [
                "nama_pengirim" => 'required',
                "alamat_pengirim" => 'required',
                "nohp_pengirim" => 'required',
                "email_pengirim" => 'required|email',
                "nama_penerima" => 'required',
                "alamat_penerima" => 'required',
                "nohp_penerima" => 'required',
                "email_penerima" => 'required|email',
                "nama_barang" => 'required',
                "nominal_ukuran"=>'gt:0',
                "rute" => 'required',
                "jenisharga" => 'required',
                "harga_kubik" => 'gt:0',
                "harga_tambahan" => 'required',
                "harga_potongan" => 'required',
                "tglberangkat" => 'required',
            ],
            [
                "nama_pengirim.required" => 'Nama Pengirim Harus diisi',
                "alamat_pengirim.required" => 'Alamat Pengirim Harus diisi',
                "nohp_pengirim.required" => 'No HP Pengirim Harus diisi',
                "email_pengirim.required" => 'Email Pengirim Harus diisi',
                "email_pengirim.email" => 'Email Pengirim tidak memenuhi syarat',
                "nama_penerima.required" => 'Nama Penerima Harus diisi',
                "alamat_penerima.required" => 'Alamat Penerima Harus diisi',
                "nohp_penerima.required" => 'No HP Penerima Harus diisi',
                "email_penerima.required" => 'Email Penerima Harus diisi',
                "email_penerima.email" => 'Email Penerima tidak memenuhi syarat',
                "nama_barang.required" => 'Nama Barang Harus diisi',
                "nominal_ukuran.gt"=>'Nominal Ukuran Harus lebih dari 0',
                "rute.required" => 'Rute Harus diisi',
                "jenisharga.required"=>'Jenis Harga Harus dipilih',
                "harga_kubik.gt"=>'Harga/Kubik Harus lebih dari 0',
                "harga_tambahan.gt" => 'Harga Tambahan Harus lebih dari 0',
                "harga_potongan.gt" => 'Harga Potongan Harus lebih dari 0',
                "tglberangkat.required" => 'Tanggal Berangkat Harus Terisi',
            ]
        );

        $pengirim = $req->nama_pengirim;
        // if($req->livesearch == "yes"){
        //     $Customer=Customer::where('nama_customer', '=', $pengirim)->get();
        //     $pengirim = $Customer[0]->id_customer;
        // }
        // dd($req->livesearch);

        if($req->update=="no"){
            Transaksi::create([
                'nomor_resi' => $req->nomor_resi,
                'nama_pengirim' =>  $pengirim,
                'alamat_pengirim' => $req->alamat_pengirim,
                'nohp_pengirim' => $req->nohp_pengirim,
                'email_pengirim' => $req->email_pengirim,
                'nama_penerima' => $req->nama_penerima,
                'alamat_penerima' => $req->alamat_penerima,
                'nohp_penerima' => $req->nohp_penerima,
                'email_penerima' => $req->email_penerima,
                'jenis_barang' => $req->nama_barang,
                'jenis_ukuran' => $req->jenis_ukuran,
                'volume' => $req->nominal_ukuran,
                'rute' => $req->rute,
                'nama_kapal' => $req->nama_kapal,
                'tanggal_berangkat' =>$req->tglberangkat,
                'jenis_harga' => $req->jenisharga,
                'harga_kubik' => $req->harga_kubik,
                'harga' => $req->harga_jenis,
                'harga_tambahan' => $req->harga_tambahan,
                'harga_potongan' => $req->harga_potongan,
                'total_harga' => $req->total,
                'status_barang' => 'Kantor SBY',
            ]);
        }else{
            $transaksi = Transaksi::withTrashed()->find($req->kode);
            $result = $transaksi->update([
                'nomor_resi' => $req->nomor_resi,
                'nama_pengirim' =>  $pengirim,
                'alamat_pengirim' => $req->alamat_pengirim,
                'nohp_pengirim' => $req->nohp_pengirim,
                'email_pengirim' => $req->email_pengirim,
                'nama_penerima' => $req->nama_penerima,
                'alamat_penerima' => $req->alamat_penerima,
                'nohp_penerima' => $req->nohp_penerima,
                'email_penerima' => $req->email_penerima,
                'jenis_barang' => $req->nama_barang,
                'jenis_ukuran' => $req->jenis_ukuran,
                'nominal_ukuran' => $req->nominal_ukuran,
                'rute' => $req->rute,
                'nama_kapal' => $req->nama_kapal,
                'tanggal_berangkat' =>$req->tglberangkat,
                'jenis_harga' => $req->jenisharga,
                'harga_kubik' => $req->harga_kubik,
                'harga' => $req->harga_jenis,
                'harga_tambahan' => $req->harga_tambahan,
                'harga_potongan' => $req->harga_potongan,
                'total_harga' => $req->total,
                'status_barang' => 'Kantor SBY',
            ]);
        }
        return redirect("/masterTransaksi");
    }


}
