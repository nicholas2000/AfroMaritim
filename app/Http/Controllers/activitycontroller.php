<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\modelpegawai;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class activitycontroller extends Controller
{
    public function formact(Request $request)
    {
        $arrActivity=Activity::all();
        $arrPegawai=modelpegawai::all();
        $arrPermission = Permission::all();
        return view("admin.mActivity",compact("arrActivity","arrPegawai","arrPermission"));
    }
}
