<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // public function vmpo()
    // {
    //     return view("admin.mPo");
    // }
    // public function ketambahvmpo(Request $request)
    // {
    //     if($request->btnkehaltambahpo)
    //     {
    //         return view("TambahPurchaseOrder");
    //     }
    // }
    // public function tambahvmpo()
    // {
    //     return view("TambahPurchaseOrder");
    // }
    // public function dotambavmpo(Request $request)
    // {
    //     if($request->btnsubmittambah)
    //     {
    //         if($request->validate(
    //             [
    //                 'ttambahpojnsbrg' => ['required'],
    //                 'ttambahhargapo' => ['required'],
    //                 'ttambahqty' => ['required'],
    //                 'ttambahdis' => ['required'],
    //                 'ttambahharga' => ['required']
    //             ],
    //             [
    //                 'ttambahpojnsbrg.required' => 'Jensis Barang Tidak Boleh Kosong',
    //                 'ttambahhargapo.required' => 'Harga Tidak Boleh Kosong',
    //                 'ttambahqty.required' => 'Quantity Tidak Boleh Kosong',
    //                 'ttambahdis.required' => 'Diskon Tidak Boleh Kosong',
    //                 'ttambahharga.required' => 'Harga Tidak Boleh Kosong',
    //             ]
    //         )
    //         )
    //         {
    //             return view("TambahPurchaseOrder");
    //         }
    //     }
    // }
}
