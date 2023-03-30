<?php

namespace App\Http\Controllers;

use App\Exports\ExportActivity;
use App\Exports\ExportTransaksi;
use App\Models\Activity;
use App\Models\modelpegawai;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class activitycontroller extends Controller
{
    public function export()
    {
        return Excel::download(new ExportActivity, 'Activity.xlsx');
    }


    public function formact(Request $request)
    {
        $arrActivity=Activity::all();
        $arrPegawai=modelpegawai::all();
        $arrPermission = Permission::all();
        return view("admin.mActivity",compact("arrActivity","arrPegawai","arrPermission"));
    }
}
