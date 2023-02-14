<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\modelpegawai;
use Illuminate\Http\Request;

class activitycontroller extends Controller
{
    public function formact()
    {
        $arrActivity=Activity::all();
        $arrPegawai=modelpegawai::all();
        return view("form.formactivity",compact("arrActivity","arrPegawai"));
    }
}
